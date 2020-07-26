@extends('layout')
@section('content')
    <form>
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Código</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Evento</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                @foreach($events as $event)
                                    <option value="{{ $event->id }}">{{ $event->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Data Início</label>
                            <input type="text" class="form-control" id="startDate">
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Data Fim</label>
                            <input type="text" class="form-control" id="endDate">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        $("#startDate").mask("99/99/9999",{placeholder:"DD/MM/AAAA"});
        $("#endDate").mask("99/99/9999",{placeholder:"DD/MM/AAAA"});
    </script>
@endsection
