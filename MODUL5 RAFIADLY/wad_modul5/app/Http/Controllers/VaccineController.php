                                    <?php

                                    namespace App\Http\Controllers;

                                    use Illuminate\Http\Request;
                                    use App\Models\Vaccines;

                                    class VaccineController extends Controller {
                                        public function home() {
                                            return view('');
                                        }

                                        public function vaccine() {
                                            $vaccines = Vaccines::all();
                                            return view('content.vaccine', compact('vaccines'));
                                        }

                                        public function add() {
                                            return view('content.addVaccine');
                                        }

                                        public function addVaccine(Request $request) {

                                            if ($files = $request->file('img')) {
                                                $file = $request->file('img');
                                                $location = 'img_db';
                                                $imgVaksin = rand(10, 2000) . "." . $files->getClientOriginalExtension();
                                                $imgPath = $file->storeAs('img_db', $imgVaksin);
                                                $files->move($location, $imgVaksin);
                                                $vaccines = new Vaccines();
                                                $vaccines->name = $request->name;
                                                $vaccines->price = $request->price;
                                                $vaccines->description = $request->description;
                                                $vaccines->image = $imgPath;
                                                $vaccines->save();
                                                return redirect(route('vaccine')); 
                                            }
                                        }

                                        public function editVaccine($id) {
                                            $Vaccines = Vaccines::find($id);
                                            return view('content.updateVaccine', ['vaccine' => $Vaccines]);
                                        }

                                        public function updateVaccine($id, Request $request) {
                                            if ($files = $request->file('img')) {
                                                $file = $request->file('img');
                                                $location = 'img_db';
                                                $imgVaksin = rand(10, 2000) . "." . $files->getClientOriginalExtension();
                                                $imgPath = $file->storeAs('img_db', $imgVaksin);
                                                $files->move($location, $imgVaksin);
                                                $vaccines = Vaccines::all();
                                                $vaccines = $vaccines->find($id);
                                                $vaccines->name = $request->name;
                                                $vaccines->price = $request->price;
                                                $vaccines->description = $request->description;
                                                $vaccines->image = $imgPath;
                                                $vaccines->save();
                                                return redirect(route('vaccine')); 
                                            }            
                                        }   

                                        public function deleteVaccine($id) {
                                            $vaccines = Vaccines::find($id);
                                            $vaccines->delete();
                                            return redirect(route('vaccine'));
                                        }

                                    }
