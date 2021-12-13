                    <?php

                    namespace App\Http\Controllers;

                    use Illuminate\Http\Request;
                    use App\Models\Patients;
                    use App\Models\Vaccines;

                    class PatientController extends Controller {
                        public function patient()
                        {   
                            $vaccine = Vaccines::all();
                            $patients = Patients::all();
                            return view('content.patient', ['patients' => $patients, 'vaccine'=>$vaccine]);
                        }

                        public function takeVaccine()
                        {
                            $vaccine = Vaccines::all();
                            return view('content.takeVaccine', ['vaccine' => $vaccine]);
                        }

                        public function addPatient($id)
                        {
                            $vaccine = Vaccines::find($id);
                            return view('content.addPatient', ['vaccine' => $vaccine]);
                        }

                        public function uploadPatient()
                        {
                            if ($files = $request->file('img')) {
                                $file = $request->file('img');
                                $location = 'img_db';
                                $imgPatient = rand(10, 2000) . "." . $files->getClientOriginalExtension();
                                $imgPath = $file->storeAs('img_db', $imgPatient);
                                $files->move($location, $imgPatient);
                                $patient = new Patients();
                                $patient->vaccine_id = $request->idVaksin;
                                $patient->name = $request->name;
                                $patient->nik = $request->nik;
                                $patient->alamat = $request->address;
                                $patient->image_ktp = $imgPath;
                                $patient->no_hp = $request->phone;
                                $patient->save();
                                return redirect(route('patient'));
                                // return redirect()->back()->with('success','berhasil ditambahkan');
                            }
                        }

                        // public function uploadPatient(Request $request)
                        // {
                        //     $request->validate([
                        //         'vaccine_id'=>'required', 
                        //         'name'=>'required',
                        //         'nik'=>'required',
                        //         'alamat'=>'required',
                        //         'img_ktp'=>'required|image|mimes:png|max:2048',
                        //         'no_hp'=>'required',
                        //     ]); 
                        //     $input = $request->all();
                        //     if ($img_ktp = $request->file('img_ktp')){
                        //         $destination = 'img_ktp/';
                        //         $img = date('YmdHis') . "." . $img_ktp->getClientOriginalExtension();
                        //         $img_ktp->move($destination, $img);
                        //         $input['img_ktp'] = "$img";
                        //     }
                        //     Patients::create($input);
                        //     return redirect(route('patient'));

                        // }

                        public function editPatient($id)
                        {
                            $patient = Patients::find($id);
                            return view('content.updatePatient', ['patient' => $patient]);
                        }

                        public function updatePatient($id, Request $request)
                        {
                            if ($files = $request->file('img')) {
                                $file = $request->file('img');
                                $location = 'img_db';
                                $imgPatient = rand(10, 2000) . "." . $files->getClientOriginalExtension();
                                $imgPath = $file->storeAs('img_db', $imgPatient);
                                $files->move($location, $imgPatient);
                                $patients = Patients::all();
                                $patient = $patients->find($id);
                                $patient->name = $request->name;
                                $patient->nik = $request->nik;
                                $patient->alamat = $request->address;
                                $patient->image_ktp = $imgPath;
                                $patient->no_hp = $request->phone;
                                $patient->save();
                                return redirect(route('patient'));
                            }
                        }

                        public function ($id) {
                            $patient = Patients::find($id);
                            $patient->delete();
                            return redirect(route('patient'));
                        }
                    }
