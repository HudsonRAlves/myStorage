@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Registrar</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf


                        <!-- Text input-->
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                        <!-- Text input-->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="Nome">CPF <h11>*</h11></label>  
                            <div class="col-md-6">
                                <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md" required="" type="text" maxlength="11" pattern="[0-9]+$" value="{{ old('cpf') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="Nome">Nascimento<h11>*</h11></label>  
                            <div class="col-md-6">
                                <input id="dtnasc" name="dtnasc" placeholder="DD/MM/AAAA" class="form-control input-md" required="" type="text" maxlength="10" value="{{ old('dtnasc') }}" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
                            </div>
                        </div>

                        <!-- Multiple Radios (inline) -->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="radios">Sexo <h11>*</h11></label>
                            <div class="col-md-6"> 
                                <label required="" class="radio-inline" for="radios-0" >
                                    <input name="sexo" id="sexo" value="feminino" type="radio" required>
                                    Feminino
                                </label> 
                                <label class="radio-inline" for="radios-1">
                                    <input name="sexo" id="sexo" value="masculino" type="radio">
                                    Masculino
                                </label>
                            </div>
                        </div>


                        <!-- Prepended text-->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="prependedtext">Telefone <h11>*</h11></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input id="telFixo" name="telFixo" class="form-control" placeholder="XX XXXXX-XXXX" 
                                           required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                           OnKeyPress="formatar('## #####-####', this)" value="{{ old('telFixo') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">    
                            <label class="col-md-4 col-form-label text-md-right" for="prependedtext">Celular</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                    <input id="telCelular" name="telCelular" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13"  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
                                           OnKeyPress="formatar('## #####-####', this)" value="{{ old('telCelular') }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <!-- Search input-->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="CEP">CEP <h11>*</h11></label>
                            <div class="col-md-4">
                                <input id="cep" name="cep" placeholder="Apenas números" class="form-control input-md" required="" value="{{ old('cep') }}" type="search" maxlength="8" pattern="[0-9]+$">
                            </div>
                            <div class="col-md-2">
                                <button type="button" class="btn btn-primary" onclick="pesquisacep(cep.value)">Pesquisar</button>
                            </div>
                            
                            
                            <div class="col-md-2">
                                <button type="button" class="btn btn-primary" onclick="pesquisa(cep.value)">Latitude</button>
                            </div>
                            
                        </div>



                        <!-- Prepended text-->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="prependedtext">Endereço</label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input id="rua" name="rua" class="form-control" placeholder="" required="" type="text" value="{{ old('rua') }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="prependedtext">Nº</label>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <input id="numero" name="numero" class="form-control" placeholder="" required=""  type="text" value="{{ old('numero') }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">        
                            <label class="col-md-4 col-form-label text-md-right" for="prependedtext">Complemento:</label>
                            <div class="col-md-5">
                                <input id="complemento" name="complemento" class="form-control" placeholder="Ex. Bloco, Apto" type="text" value="{{ old('complemento') }}">
                                <input id="lat" name="lat" class="form-control" placeholder="" type="hidden" value="{{ old('lat') }}">
                                 <input id="lgn" name="lgn" class="form-control" placeholder="" type="hidden" value="{{ old('lgn') }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="prependedtext">Bairro:</label>
                            <div class="col-md-6">
                                <div class="input-group">                                   
                                    <input id="bairro" name="bairro" class="form-control" placeholder="" required="" type="text" value="{{ old('bairro') }}" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="prependedtext">Cidade:</label>
                            <div class="col-md-6">
                                <div class="input-group">                                    
                                    <input id="cidade" name="cidade" class="form-control" placeholder="" required=""  type="text" value="{{ old('cidade') }}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="prependedtext">UF:</label>
                            <div class="col-md-2">
                                <div class="input-group">
                                    <input id="estado" name="estado" class="form-control" placeholder="" required="" type="text" value="{{ old('estado') }}">
                                </div>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="Estado Civil">Estado Civil <h11>*</h11></label>
                            <div class="col-md-4">
                                <select required id="Estado Civil" name="Estado Civil" class="form-control">
                                    <option value=""></option>
                                    <option value="Solteiro(a)">Solteiro(a)</option>
                                    <option value="Casado(a)">Casado(a)</option>
                                    <option value="Divorciado(a)">Divorciado(a)</option>
                                    <option value="Viuvo(a)">Viuvo(a)</option>
                                </select>
                            </div>
                        </div>

                        <!-- Prepended checkbox -->
                        <div class="form-group row">'
                            <label class="col-md-4 col-form-label text-md-right" for="Filhos">Filhos<h11>*</h11></label>
                            <div class="col-md-3">
                                <div class="input-group">
                                    <span class="input-group-addon">     
                                        <label class="radio-inline" for="radios-0">
                                            <input type="radio" name="filhos" id="filhos" value="nao" onclick="desabilita('filhos_qtd')" required>
                                            Não
                                        </label> 
                                        <label class="radio-inline" for="radios-1">
                                            <input type="radio" name="filhos" id="filhos" value="sim" onclick="habilita('filhos_qtd')">
                                            Sim
                                        </label>
                                    </span>
                                    <input id="filhos_qtd" name="filhos_qtd" class="input-group" type="number" placeholder="Quantos?" pattern="[0-9]+$">
                                </div>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="selectbasic">Escolaridade <h11>*</h11></label>

                            <div class="col-md-4">
                                <select required id="escolaridade" name="escolaridade" class="form-control">
                                    <option value=""></option>
                                    <option value="Analfabeto">Analfabeto</option>
                                    <option value="Fundamental Incompleto">Fundamental Incompleto</option>
                                    <option value="Fundamental Completo">Fundamental Completo</option>
                                    <option value="Médio Incompleto">Médio Incompleto</option>
                                    <option value="Médio Completo">Médio Completo</option>
                                    <option value="Superior Incompleto">Superior Incompleto</option>
                                    <option value="Superior Completo">Superior Completo</option>
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right" for="profissao">Profissão<h11>*</h11></label>  
                            <div class="col-md-6">
                                <input id="profissao" name="profissao" type="text" placeholder="" class="form-control input-md" required="" value="{{ old('profissao') }}">
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group row">
                            <label class="col-md-4 control-label" for="textinput">Como ficou sabendo do My Storage?</label>  
                            <div class="col-md-8">
                                <input id="comoconheceu" name="comoconheceu" placeholder="" class="form-control input-md" type="text" value="{{ old('comoconheceu') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>

                                <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">
                                    Cancelar
                                </button>

                            </div>
                        </div>
                    </form>
                </div>

                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">* - Campos Obrigatórios</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script src="{{url("/js/validacaoCadastroUsuarios.js")}}"></script>

@endsection




