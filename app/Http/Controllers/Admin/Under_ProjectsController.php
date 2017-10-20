<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Under_Project;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Session;

class Under_ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $id=$request->get('project');
        $perPage = 25;

        if (!empty($keyword)) {
            $under_projects = Under_Project::where('title', 'LIKE', "%$keyword%")
				->orWhere('description', 'LIKE', "%$keyword%")
                ->where('project_id', '=', $id)
				->paginate($perPage);
        } else {
            $under_projects = Under_Project::where('project_id', '=', $id)->paginate($perPage);
        }

        return view('admin.under_-projects.index', compact('under_projects','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.under_-projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'title' => 'required',
			'is_ftp' => 'required'
		]);
        $requestData = $request->all();
        
        Under_Project::create($requestData);

        Session::flash('flash_message', 'Under_Project added!');

        return redirect('admin/under_-projects');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
//    public function show($id)
//    {
//        $under_project = Under_Project::findOrFail($id);
//
//        return view('admin.under_-projects.show', compact('under_project'));
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $under_project = Under_Project::findOrFail($id);

        return view('admin.under_-projects.edit', compact('under_project'));
    }
    /*
     * recupere le   repertoire ftp ou partage
     */

    public function show($id)
    {
        $underproject = Under_Project::find($id);
        $repertoires = array();
        $fichiers = array();


        if ($underproject->is_ftp == True) {

            $ftp_host = $underproject->ftp_host;
            $ftp_user = $underproject->ftp_user;
            $ftp_password = $underproject->ftp_pwd;
            try {
                $conn = ftp_connect($ftp_host);
            } catch (\Exception $e) {
                Session::flash('flash_message', $e->getMessage());
                return back();

            }

            try {
                $conn = ftp_connect($ftp_host);
            } catch (\Exception $e) {
                Session::flash('flash_message', 'Impossible de se connecter au serveur ' . $ftp_host);
                return back();

            }
            try {
                $login = ftp_login($conn, $ftp_user, $ftp_password);
            } catch (\Exception $e) {
                Session::flash('flash_message', 'Connexion impossible en tant que ' . $ftp_user);
                return back();

            }


            if ($underproject->ftp_mode == 0) {
                $mode = ftp_pasv($conn, False);
            } else {
                $mode = ftp_pasv($conn, True);
            }

            if ((!$conn) || (!$login) || (!$mode)) {
                Session::flash('flash_message', 'FTP connection has failed !');

                return back();

            }

            $dir = $underproject->emplacement;
            $file_list = ftp_nlist($conn, $dir);
             //dd($file_list);
            foreach ($file_list as $file) {
                if (!in_array($file, array(".", "..", ".htaccess", ".htpasswd"))) {
                    $de = is_dir("ftp://" . $ftp_user . ":" . $ftp_password . "@" . $ftp_host . "/" . $dir . "/" . $file);

                    if ($de == True) {
                        $repertoires[] = array('dir' => $dir . "/" . $file, 'name' => $file);

                    } else {
                        $fichiers[] = array('dir' => $dir . "/" . $file, 'name' => $file);
                    }
                }

            }
            // dd($repertoires,$fichiers);
            return view('admin.under_-projects.ftp')->with(['fichiers' => $fichiers, 'repertoires' => $repertoires, 'underproject' => $underproject]);

        } else {

            try {
                $cdir = scandir($underproject->emplacement);
            } catch (\Exception $e) {
                Session::flash('flash_message', 'le dossier spécifié est introuvable : ' . $underproject->emplacement);
                return back();

            }
            if (is_dir($underproject->emplacement)) {
                $cdir = scandir($underproject->emplacement);
                foreach ($cdir as $key => $value) {
                    if (!in_array($value, array(".", "..", ".htaccess", ".htpasswd"))) {
                        if (is_dir($underproject->emplacement . DIRECTORY_SEPARATOR . $value)) {
                            $repertoires[] = array('dir' => $underproject->emplacement . DIRECTORY_SEPARATOR . $value, 'name' => $value);
                        } else {
                            $fichiers[] = array('dir' => $underproject->emplacement . DIRECTORY_SEPARATOR . $value, 'name' => $value);
                        }
                    }
                }
                return view('admin.under_-projects.partage')->with(['fichiers' => $fichiers, 'repertoires' => $repertoires, 'underproject' => $underproject]);


            } else {

                return redirect()->route('sousprojet.details', $underproject->id)->with(['error' => 'le dossier spécifié est introuvable']);

            }


        }


    }
    public function detailsrepertoire($id, $repe)
    {
        $underproject = Under_Project::find($id);
        $repertoires = array();
        $fichiers = array();
        if ($underproject->is_ftp == True) {

            $ftp_host = $underproject->ftp_host;
            $ftp_user = $underproject->ftp_user;
            $ftp_password = $underproject->ftp_pwd;
            try {
                $conn = ftp_connect($ftp_host);
            } catch (\Exception $e) {
                Session::flash('flash_message', 'Impossible de se connecter au serveur ' . $ftp_host);
                return back();

            }
            try {
                $login = ftp_login($conn, $ftp_user, $ftp_password);
            } catch (\Exception $e) {
                Session::flash('flash_message', 'Connexion impossible en tant que ' . $ftp_user);
                return back();

            }
            if ($underproject->ftp_mode == 0) {
                $mode = ftp_pasv($conn, False);
            } else {
                $mode = ftp_pasv($conn, True);
            }

            if ((!$conn) || (!$login) || (!$mode)) {
                die("FTP connection has failed !");
                Session::flash('flash_message', 'FTP connection has failed ! ' );
                return back();
            }
            $dir = str_replace('@', '\\', $repe);
            $file_list = ftp_nlist($conn, $dir);
            //dd($file_list);

            foreach ($file_list as $file) {
                if (!in_array($file, array(".", "..", ".htaccess", ".htpasswd"))) {
                    $de = is_dir("ftp://" . $ftp_user . ":" . $ftp_password . "@" . $ftp_host . "/" . $dir . "/" . $file);
                    if ($de == True) {
                        $repertoires[] = array('dir' => $dir . "/" . $file, 'name' => $file);

                    } else {
                        $fichiers[] = array('dir' => $dir . "/" . $file, 'name' => $file);
                    }
                }
            }

            return view('admin.under_-projects.ftp')->with(['fichiers' => $fichiers, 'repertoires' => $repertoires, 'underproject' => $underproject, 'conn' => $conn, 'login' => $login]);

        } else {
            try {
                $cdir = scandir($underproject->emplacement);
            } catch (\Exception $e) {
                Session::flash('flash_message', 'le dossier spécifié est introuvable : ' . $underproject->emplacement );
                return back();


            }
            $cdir = scandir(str_replace('@', '\\', $repe));
            foreach ($cdir as $key => $value) {
                if (!in_array($value, array(".", "..", ".htaccess", ".htpasswd"))) {
                    if (is_dir(str_replace('@', '\\', $repe) . DIRECTORY_SEPARATOR . $value)) {
                        $repertoires[] = array('dir' => str_replace('@', '\\', $repe) . DIRECTORY_SEPARATOR . $value, 'name' => $value);
                    } else {
                        $fichiers[] = array('dir' => str_replace('@', '\\', $repe) . DIRECTORY_SEPARATOR . $value, 'name' => $value);
                    }
                }
            }


            return view('admin.under_-projects.partage')->with(['fichiers' => $fichiers, 'repertoires' => $repertoires, 'underproject' => $underproject]);

        }


    }

    public function telecharger($id,$chemin)
    {
        $chemin        = str_replace('@','/',$chemin);
        $underproject  = Under_Project::find($id);

        if ($underproject->is_ftp == True) {
            $ftp_host  = $underproject->ftp_host;
            $ftp_user  = $underproject->ftp_user;
            $ftp_password = $underproject->ftp_pwd;
            $file_url  = "ftp://".$ftp_user.":".$ftp_password."@".$ftp_host.'/'.$chemin;

            $options = array('ftp' => array('overwrite' => true));
            $stream = stream_context_create($options);

            $data = file_get_contents($file_url, 0, $stream);


            $file = public_path().'/downloads/'.basename($file_url);
            file_put_contents($file, $data);

            return [
                'size'=>filesize($file),
                'url'=>'/downloads/'.basename($file_url)
            ];
        }

    }
    
   /* public function telecharger($id, $file, $fichier)
    {
        try {
            $underproject = Under_Project::find($id);

            if ($underproject->is_ftp == True) {
                $ftp_host = $underproject->ftp_host;
                $ftp_user = $underproject->ftp_user;
                $ftp_password = $underproject->ftp_pwd;
                $conn = ftp_connect($ftp_host);
                $login = ftp_login($conn, $ftp_user, $ftp_password);
                if ($underproject->ftp_mode == 0) {
                    $mode = ftp_pasv($conn, False);
                } else {
                    $mode = ftp_pasv($conn, True);
                }

                if ((!$conn) || (!$login) || (!$mode)) {
                    die("FTP connection has failed !");
                    Session::flash('flash_message', 'FTP connection has failed !');

                    return back();
                }
                $dir = str_replace('@', '/', $file);
                $file_list = ftp_nlist($conn, $dir);
                if (ftp_get($conn, $fichier, $dir, FTP_BINARY)) {
                    header('Content-Length: ' . filesize($fichier));
                    header('Content-Type: application/octet-stream');
                    header('Content-Disposition: attachment; filename="' . basename($fichier) . '"');
                    header('Content-Transfer-Encoding: binary');
                    header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                    readfile($fichier); // send the file
                }
                return route(sousprojet.repertoire, array('id' => $underproject->id, 'repe' => $file));
                //return view('underproject.ftp')->with(['fichiers' => $file_list, 'underproject' => $underproject,'conn'=>$conn,'login'=>$login]);

            } else {
                $dir = str_replace('@', '/', $file);


                header('Content-Length: ' . filesize($dir));
                header('Content-Type: application/octet-stream');
                header('Content-Disposition: attachment; filename="' . basename($dir) . '"');
                header('Content-Transfer-Encoding: binary');
                header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
                readfile($dir); // send the file

                return route(sousprojet.repertoire, array('id' => $underproject->id, 'repe' => $file));
            }

        } catch (\Exception $e) {
            return back()->with(['error' => $e->getMessage()]);

        }


    }*/
    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
			'title' => 'required',
			'is_ftp' => 'required'
		]);
        $requestData = $request->all();
        
        $under_project = Under_Project::findOrFail($id);
        $under_project->update($requestData);

        Session::flash('flash_message', 'Under_Project updated!');

        return redirect('admin/under_-projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Under_Project::destroy($id);

        Session::flash('flash_message', 'Under_Project deleted!');

        return redirect('admin/under_-projects');
    }
}
