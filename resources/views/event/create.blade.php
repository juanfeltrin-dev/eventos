@extends('layout')
@section('content')
    <form>
        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Data</label>
                            <input type="text" class="form-control" id="date">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Categoria</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Quantidade de Ingressos</label>
                            <input type="number" min="0" class="form-control" id="exampleInputPassword1">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <label>Selecione a Classificação Indicativa</label><br />
                        @foreach($ages as $age)
                            <div class="form-check form-check-inline">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="radio" value="{{ $age->id }}" name="age" id="age{{ $age->id }}">
                                    <img src="{{ $age->image }}" width="35" height="35">
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Estado</label>
                            <select class="form-control" id="exampleFormControlSelect1" onchange="getCities($(this).children('option:selected').val())">
                                <option value="">Selecione um Estado</option>
                                @foreach($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="exampleInputPassword1">Cidade</label>
                            <select class="form-control" id="cities">

                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Local</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Descrição</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputPassword1">Banner</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">
                        Banner Destaque?
                    </label>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
    </form>

    <script>
        $("#date").mask("99/99/9999",{placeholder:"DD/MM/AAAA"});

        function getCities(state)
        {
            $('#cities').empty();

            $.ajax({
                url: "/cities/" + state,
                success: function(response) {
                    $.each(response, function (i, item) {
                        var option = new Option(item.name, item.id);
                        $('#cities').append($(option));
                    });
                }
            });
        }
    </script>
@endsection
