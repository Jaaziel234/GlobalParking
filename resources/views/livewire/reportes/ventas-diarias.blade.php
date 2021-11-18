   <div id="content" class="main-content">
            <div class="layout-px-spacing">


                <!-- CONTENT AREA -->
                

                <div class="row layout-top-spacing">
                    
                    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
                        <div class="widget-content-area br-4">
                            <div class="widget-one">

                                <h3 class="text-center">Reporte de Ventas Diarias</h3>
                                	
                                <div class="row">
                                	<div class="col-sm-12 col-md-4 col-lg-4 text-left">
                                		<b>Fecha de Consulta</b>: {{\Carbon\Carbon::now()->format('d-m-Y')}}
                                        <br>
                                        <b>Cantidad Registros</b>: {{ $info->count() }}
                                        <br>
                                        <b>Total Ingresos</b>: ${{ number_format($sumaTotal,2) }}
                                	</div>
                                	<div class="col-sm-12 col-md-8 col-lg-8 text-right">
                                        
                                	</div>
                                </div>
                                <div class="row">
                                     <div class="table-responsive mt-3">
                                        <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4" id="example">
                                            <thead>
                                                <tr>                                                   
                                                    <th class="text-center">CÓDIGO</th>                 
                                                    <th class="text-center">VEHÍCULO</th>
                                                    <th class="text-center">ACCESO</th>
                                                    <th class="text-center">SALIDA</th>
                                                    <th class="text-center">TIEMPO</th>
                                                    <th class="text-center">TARIFA</th>
                                                    <th class="text-center">IMPORTE</th>
                                                    <th class="text-center">USUARIO</th>                
                                                    <th class="text-center">ESTATUS</th>
                                                    <th class="text-center">SERVICIO</th>
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($info as $r)
                                                <tr>
                                                   
                                                    <td class="text-center"><p class="mb-0">{{$r->barcode}}</p></td>
                                                    <td class="text-center">
                                                        {{$r->vehiculo}} 
                                                        @if($r->descripcion !=null)
                                                        <br>"{{$r->descripcion}}"
                                                        @endif
                                                    </td>
                                                    <td class="text-center">{{$r->acceso}}</td>
                                                    <td class="text-center">{{$r->salida}}</td>
                                                    <td class="text-center">{{$r->hours}} Hrs.</td>
                                                    <td class="text-center">${{number_format($r->tarifa,2)}}</td>
                                                    <td class="text-center">
                                                    @if($r->multa > 0)
                                                        ${{$r->total}} <br> (extraviado)
                                                        @else
                                                        ${{$r->total}}
                                                    @endif
                                                    </td>
                                                    
                                                    <td class="text-center">{{$r->usuario}}</td>        
                                                    <td class="text-center">{{$r->estatus}}</td>
                                                    <td class="text-center" class="text-center">
                                                        @if($r->vehiculo_id == null)
                                                        RENTA
                                                        @else
                                                        PENSIÓN
                                                        @endif
                                                    </td>
                                                    
                                                </tr>
                                               @endforeach
                                            </tbody>
                                             <tfoot>
                                                <tr>
                                                    <th class="text-right" colspan="8">SUMA IMPORTES:</th>
                                                    <th class="text-center" colspan="2">${{ number_format($sumaTotal,2) }}</th>                                                    
                                                </tr>
                                            </tfoot>
                                        </table>
                                        @include('common.datatable')
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>



                <!-- CONTENT AREA -->

            </div>
           
        </div>
        <!--  END CONTENT AREA  -->

