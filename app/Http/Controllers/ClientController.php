<?php

namespace App\Http\Controllers;

use App\Client;
use Image;
use PDF;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addClient(){
        return view('front-end.client.add-client');
    }

    protected function clientImageUpload($request){
        $clientImage = $request->file('client_image');
        $fileType   = $clientImage->getClientOriginalExtension();
        $imageName  =   $request->client_name.'.'.$fileType;
        $directory  =   'client-images/';
        $imageUrl   =   $directory.$imageName;
        //$clientImage->move($directory, $imageName);
        Image::make($clientImage)->save($imageUrl);
        return $imageUrl;
    }


    protected function saveClientBasicInfo($request, $imageUrl){
        $client = new Client();

        $client->client_name = $request->client_name;
        $client->phone = $request->phone;
        $client->company_name = $request->company_name;
        $client->address = $request->address;
        $client->project_name = $request->project_name;
        $client->deadline = $request->deadline;
        $client->project_budget = $request->project_budget;
        $client->client_image = $imageUrl;
        $client->save();
    }
    public function saveClient(Request $request){
        $imageUrl = $this->clientImageUpload($request);
        $this->saveClientBasicInfo($request, $imageUrl);

        return redirect('/client/add')->with('message','Client Info Added Successfully');

    }

    public function manageClient(){
        $clients = Client::paginate(4);
        return view('front-end.client.manage-client', ['clients'=>$clients]);
    }

    public function editClient($id){
        $client = Client::find($id);

        return view('front-end.client.edit-client', ['client'=>$client]);
    }

    protected function updateClientBasicInfo($request, $imageUrl){
        $client = Client::find($request->client_id);

        $client->client_name = $request->client_name;
        $client->phone = $request->phone;
        $client->company_name = $request->company_name;
        $client->address = $request->address;
        $client->project_name = $request->project_name;
        $client->deadline = $request->deadline;
        $client->project_budget = $request->project_budget;
        $client->client_image = $imageUrl;
        $client->save();
    }

    public function updateClient(Request $request){
        $imageUrl = $this->clientImageUpload($request);
        $this->updateClientBasicInfo($request, $imageUrl);

        return redirect('/client/manage')->with('message','Client Info Updated Successfully');

    }

    public function deleteClient($id){
        $client = Client::find($id);
        $client->delete();
        return redirect('/client/manage')->with('message', 'Client Info deleted successfully');

    }

    public function pdfGenerator($id){
        $client = Client::find($id);
        $pdf = PDF::loadView('front-end.client.pdf-client',['client'=>$client]);
        return $pdf->stream('invoice.pdf');
    }
}
