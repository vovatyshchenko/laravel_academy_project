@extends('layouts.default_admin')
@section('title_admin', 'Админка')
@section('content_admin')
<div id="layoutSidenav_content">
                <main>
           <div class="card mb-4">
                            <div class="card-header"><i class="fas fa-table mr-1"></i>Сводная таблица</div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Имя</th>
                                                <th>Телефон</th>
                                                <th>Мастер</th>
                                                <th>Услуга</th>
                                                <th>Дата</th>
                                                <th>Время</th>
                                                <th>Стоимость</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Имя</th>
                                                <th>Телефон</th>
                                                <th>Мастер</th>
                                                <th>Услуга</th>
                                                <th>Дата</th>
                                                <th>Время</th>
                                                <th>Стоимость</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Garrett Winters</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Ashton Cox</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Cedric Kelly</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Airi Satou</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Brielle Williamson</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Herrod Chandler</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Rhona Davidson</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Colleen Hurst</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Sonya Frost</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Jena Gaines</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Quinn Flynn</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Charde Marshall</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Haley Kennedy</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Silva</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Paul Byrd</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Gloria Little</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Bradley Greer</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Dai Rios</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Jenette Caldwell</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Yuri Berry</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Caesar Vance</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Doris Wilder</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Angelica Ramos</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Joyce</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Chang</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Brenden Wagner</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Fiona Green</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Shou Itou</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Michelle House</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Suki Burks</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Prescott Bartlett</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Gavin Cortez</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Martena Mccray</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Unity Butler</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Howard Hatfield</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Hope Fuentes</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Vivian Harrell</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Timothy Mooney</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Jackson Bradshaw</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Olivia Liang</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Bruno Nash</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Sakura Yamamoto</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Thor Walton</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Finn Camacho</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Serge Baldwin</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Zenaida Frank</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Zorita Serrano</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Jennifer Acosta</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Cara Stevens</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Hermione Butler</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Lael Greer</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Jonas Alexander</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Shad Decker</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Michael Bruce</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                            <tr>
                                                <td>Donna Snider</td>
                                                <td>0501234567</td>
                                                <td>Мастер</td>
                                                <td>Стрижка</td>
                                                <td>2020/03/27</td>
                                                <td>12-00</td>
                                                <td>300</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
               </div>
   </div><!--<div id="layoutSidenav">--> 
@endsection
