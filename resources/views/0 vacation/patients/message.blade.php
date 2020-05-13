@extends('0 vacation.layout')

@section('nav2')
    @include('0 vacation.component.patient-nav')
@endsection

@section('content')
<div class="container mb-4">
    <div class="row">
        <div class="col-md-12">
            <h3>Bonjour Mme X</h3>
        </div>

            {{-- ===================================================================== --}}
        <div class="col-md-12">
            <h5>Nouvelles demandes</h5>
            <div class="card">
            <div class="card-body">
                <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-inbox-tab" data-toggle="tab" href="#nav-inbox" role="tab" aria-controls="nav-inbox" aria-selected="true">Inbox</a>
                    <a class="nav-item nav-link" id="nav-sent-tab" data-toggle="tab" href="#nav-sent" role="tab" aria-controls="nav-sent" aria-selected="false">Sent</a>
                    <a class="nav-item nav-link" id="nav-draft-tab" data-toggle="tab" href="#nav-draft" role="tab" aria-controls="nav-draft" aria-selected="false">Draft</a>
                    <a class="nav-item nav-link" id="nav-urgent-tab" data-toggle="tab" href="#nav-urgent" role="tab" aria-controls="nav-urgent" aria-selected="false">Urgent</a>
                </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-inbox" role="tabpanel" aria-labelledby="nav-inbox-tab">
                    <div class="row">
                    <div class="col-md-6">
                        <input type="search" class="form-control" name="" placeholder="Rechercher">
                    </div>
                    <div class="col-md-6">
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <button type="button" class="btn btncolorfull">Nouveau Message</button>

                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btncolor dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Action
                            </button>
                            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                            <a class="dropdown-item" href="#">Dropdown link</a>
                            <a class="dropdown-item" href="#">Dropdown link</a>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                        <div class="col-md-4">
                            <ul class="list-group list-group-flush">
                            @for ($i=0; $i < 10; $i++)
                                <li class="list-group-item">
                                <b>De : </b> Paresh Dash  <span class="text-right text-primary"> 30 Aout</span> <br>
                                <b>Objet : </b> qDQSDQSS
                                </li>
                            @endfor
                        </ul>

                        </div>
                        <div class="col-md-8">
                            <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <b>From :</b> Pareh Dash <span class="text-right text-primary"> 30 Aout</span>  <br>
                                <b>To :</b> Dash Paresh <br>
                                <b>Objet :</b> Réunion
                            </li>
                            <li class="list-group-item">
                                Hello <br>
                                Ceci est mon super message <br>
                                Cordialement <br>
                            </li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-sent" role="tabpanel" aria-labelledby="nav-sent-tab">2...</div>
                <div class="tab-pane fade" id="nav-draft" role="tabpanel" aria-labelledby="nav-draft-tab">3...</div>
                <div class="tab-pane fade" id="nav-urgent" role="tabpanel" aria-labelledby="nav-urgent-tab">4...</div>
                </div>



            </div>
            </div>
        </div>
    </div>
</div>

@endsection
