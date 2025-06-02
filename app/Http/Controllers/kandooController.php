<?php

namespace App\Http\Controllers;

use App\Models\beehive;
use App\Models\Desc;
use Illuminate\Http\Request;
use App\Models\Bee;
use Illuminate\Support\Facades\Auth;
use Validator;

class kandooController extends Controller

{
    protected $vali = [
        'id_mother' => 'numeric',
        'cloni_type' => 'required|string',
        'box_number' => 'required|numeric',
        'picture' => 'file|mimes:png,jpeg',
        'age_queen' => 'numeric',
        'qeen_race' => 'required|string',
        'shakhoon' => 'string',
        'bimari' => 'string',
        'date_bazdid' => 'required|string',

    ];
    protected $messages = [
        'id_mother.numeric' => 'شماره کندوی مادر باید از نوع عدد باشد!',
        'cloni_type.string' => 'نوع کلنی باید به صورت متنی باشد!',
        'cloni_type.required' => 'نوع کلنی باید مشخص شود',
        'box_number.required' => 'تعداد قاب داخل کندو باید مشخص شود',
        'box_number.numeric' => 'تعداد قاب داخل کندو باید به صورت عدد باشد',
        'picture.file' => 'فایل نامعتبر است',
        'picture.mime' => 'فرمت فایل مورد قبول نیست',
        'age_queen.numeric' => 'سن ملکه باید به صورت عدد وارد شود !',
        'qeen_race.required' => 'نژاد ملکه باید مشخص شود',
        'qeen_race.string' => 'نژاد ملکه باید متنی باشد!',
        'shakhoon.string' => 'شاخون باید به صورت متنی باشد!',
        'bimari.string' => 'بیماری باید به صورت متنی باشد ',
        'date_bazdid.required' => 'تاریخ بازدید حتما باید قید شود!',

    ];
    //برای احراز هویت
    public function __construct()
    {
        $this->middleware('auth');
       // $this->middleware('auth:sanctum');
    }
    public function index(Request $request)
    {

            //احراز هویت کاربر و نمایش اطلاعات مربوط به کاربر
            $id =Auth::User()->id;
            $rows = Bee::where('id_user', 'LIKE', "%$id%")->orderby('id','DESC')->paginate(5);
            $hi =Bee::all('id_beehive');
            $hive=beehive::find($hi);
        return view('kandoo.main', ['rows' => $rows,'hive'=>$hive]);
    }

    public function create()
    {
        $beehive = beehive::all();
        return view('kandoo.add',['hive'=>$beehive]);
    }

    public function store(Request $request)
    {


        $rows = $request->all();
//ارسال خطاهای مربوط به ثبت اطلاعات
        $validator = Validator::make($rows, $this->vali, $this->messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        //ثبت اطلاعات با ای دی کاربر
        $user_id=Auth::User()->id;
        $rows['id_user']= $user_id;
        //ساخت یک ردیف جدید در دیتابیس
        $id = Bee::create($rows)->id;
        $row = Bee::find($id);

        if ($request->hasFile('picture')) {
            $pic = $request->file('picture');
            if ($pic->isValid()

            ) {

                $picname = $id . '.' . $pic->getClientOriginalExtension();
                $pic->move(public_path('upload/image'), $picname);
                $rows['picture'] = $picname;

            }

        }
        //اپدیت جدول به جهت مشکل ثبت تصاویر
        $row->update($rows);
        return redirect('main')->with('sucsses',true);

    }

    public function show($id)
    {

        $rows = Bee::find($id);
        $desc = Desc::where('desc_id', $id)->get();
        return view('kandoo.show', ['row' => $rows, 'desc' => $desc]);
    }

    public function edit($id)
    {
        $beehive = beehive::all();
        $rows = Bee::find($id);
        return view('kandoo.edit', ['row' => $rows,'hive'=>$beehive]);
    }

    public function update(Request $request, $id)
    {
        $row = $request->all();

        $validator = Validator::make($row, $this->vali, $this->messages);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $up = Bee::find($id);

        if ($request->hasFile('picture')) {
            $pic = $request->file('picture');
            if ($pic->isValid()) {
                $picname = $id . '.' . $pic->getClientOriginalExtension();
                $pic->move(public_path('upload/image'), $picname);
                $row['picture'] = $picname;
            }
        }
        $up->update($row);
        return redirect('main')->with('succesedit',true);
    }

    public function destroy($id)
    {
        $desc ['desc_id']=$id;
        Bee::destroy($id);
        Desc::destroy($desc);
        return redirect('main')->with('sucssesdelete',true);
    }
}
