<div class="table-responsive">
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Autor</th>
                <th>Titulo</th>
                <th>Editorial</th>
                <th>Cantidad de ejemplares</th>
                <th>Año</th>
                <th width="10">Agregar a lista</th>
            </tr>
        </thead>
    
        <tbody>
            <tr>
                <td><a data-toggle="modal" href='#modal-id'>Juan Perez</a></td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>0</td>
                <td>2011/04/25</td>
                <td>
                <input type="checkbox" name="" class="forn-control input-sm" disabled=>
                </td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>
                <input type="checkbox" name="" class="forn-control input-sm">
                </td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>
                <input type="checkbox" name="" class="forn-control input-sm">
                </td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>
                <input type="checkbox" name="" class="forn-control input-sm">
                </td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>
                <input type="checkbox" name="" class="forn-control input-sm">
                </td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>
                <input type="checkbox" name="" class="forn-control input-sm">
                </td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>
                <input type="checkbox" name="" class="forn-control input-sm">
                </td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>
                <input type="checkbox" name="" class="forn-control input-sm">
                </td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
               <td>
                <input type="checkbox" name="" class="forn-control input-sm">
                </td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>
                <input type="checkbox" name="" class="forn-control input-sm">
                </td>
            </tr>      
           
        
        </tbody>
    </table>
</div>




<div class="modal fade" id="modal-id">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Detalle de Libro</h4>
            </div>
            <div class="modal-body">
            
            

            <div class="row">
            <div class="col-md-4">
             <img src="<?php echo PATH; ?>/assets/img/portada.jpg" 
            alt="portada" class="img-responsive img-thumbnail" width="300">
            </div>
            <div class="col-md-8">
            <ul>
            <li>Clasificación Dewey</li>
            <li>Autor Personal</li>
            <li>Título</li>
            <li>Edición</li>
            <li>Idioma</li>
            <li>Área Temática</li>
            <li>Pie Imprenta</li>
            <li>Descripción Física</li>
            <li>ISBN</li>
            <li>Otros Autores</li>
            </ul> 
            </div>
            </div>
            </div>

          
          
        </div>
    </div>
</div>

    