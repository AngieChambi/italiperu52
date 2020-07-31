@extends('admin.layout')
@section('title','Contactos')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div >
                <div class="card">
                    <div class="card-header" data-background-color="purple">
                        <h4 class="title">Todos Los Contactos</h4>
                    </div>

                    <div class="card-content table-responsive">
                        <table  class="table" cellspacing="0" with="100%">
                            <thead class="text-primary">
                            <th>Nr</th>
                            <th>nombre</th>
                            <th>Programa</th>
                            <th>Sede</th>
                            <th>E-mail</th>
                            <th>Numero</th>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->id}}</td>
                                    <td>{{ $contact->nombre}}</td>
                                    <td>{{ $contact->sede}}</td>
                                    <td>{{ $contact->programa}}</td>
                                    <td>{{ $contact->celular}}</td>
                                    <td>{{ $contact->email}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $contacts->links() }}
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection