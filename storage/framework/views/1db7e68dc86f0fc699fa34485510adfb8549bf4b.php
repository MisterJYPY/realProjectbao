<?php $__env->startSection('content'); ?>
    <style>
        .filterable {
            margin-top: 15px;
        }
        .filterable .panel-heading .pull-right {
            margin-top: -20px;
        }
        .filterable .filters input[disabled] {
            background-color: transparent;
            border: none;
            cursor: auto;
            box-shadow: none;
            padding: 0;
            height: auto;
        }
        .filterable .filters input[disabled]::-webkit-input-placeholder {
            color: #333;
        }
        .filterable .filters input[disabled]::-moz-placeholder {
            color: #333;
        }
        .filterable .filters input[disabled]:-ms-input-placeholder {
            color: #333;
        }

    </style>
<div class="container-fluid">
    <form id="articlesForm" method="post" class="form"  action="<?php echo e(route('productRegister')); ?>">
        <?php echo e(csrf_field()); ?>

<div class="row" >
    <div class="col-md-6 ">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h4>Enregistrer un nouvel article</h4>
            </div>
            <div class="card-body">
                <p>Ceci permettra de dynamiser les affichages sur le site</p>
                <form>
                    <div class="form-group">
                        <label>intulé de l'article</label>
                        <input type="text" placeholder="Intitule de l'article" name="intitule" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" placeholder="Description" name="description" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image de l'articles</label>
                        <input type="file" placeholder="Password" name="image" class="form-control" multiple>
                    </div>
                    <div class="form-group">
                        <label>Services:</label>
                        <select class="selectpicker" name="services">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option title="Combo 1"><?php echo e($service->intitule); ?></option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    </div>

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header d-flex align-items-center">
                <h4>Un petit parametrage sur ce article</h4>
            </div>
            <div class="card-body">
                <p>Vous regler les options d'affichages sur le site</p>

                    <div class="form-group">
                        <label>Niveau de priorité d'affichage</label>
                        <div class="col-sm-10">

                            <div>
                                <input id="optionsRadios1" type="radio" checked="" value="option1" name="priorite">
                                <label for="optionsRadios1">Elevé</label>
                            </div>
                            <div>
                                <input id="optionsRadios2" type="radio" checked="true" value="option2" name="priorite">
                                <label for="optionsRadios2">Normal</label>
                            </div>
                    </div>
                        <div class="form-group">
                            <label>Statut</label>
                            <div class="col-sm-10">

                                <div>
                                    <input id="optionsRadios1" type="radio" checked="true" value="option1" name="statut">
                                    <label for="optionsRadios1">Activé</label>
                                </div>
                                <div>
                                    <input id="optionsRadios2" type="radio" value="option2" name="statut">
                                    <label for="optionsRadios2">Désactivité</label>
                                </div>
                            </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea type="text" placeholder="Description" class="form-control"></textarea>
                    </div>
                    </div>

            </div>
        </div>
    </div>
    <div class="form-group">
        <input type="submit" value="Signin" class="btn btn-primary">
    </div>
    </form>
</div>
</div>
<div class="container">
    <h3>The columns titles are merged with the filters inputs thanks to the placeholders attributes</h3>
    <hr>
    <p>Inspired by this <a href="http://bootsnipp.com/snippets/featured/panel-tables-with-filter">snippet</a></p>
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                <h3 class="panel-title">Users</h3>
                <div class="pull-right">
                    <button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span> Filter</button>
                </div>
            </div>
            <table class="table">
                <thead>
                <tr class="filters">
                    <th><input type="text" class="form-control" placeholder="#" disabled></th>
                    <th><input type="text" class="form-control" placeholder="First Name" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Last Name" disabled></th>
                    <th><input type="text" class="form-control" placeholder="Username" disabled></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>1</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
    <script type="text/javascript">
        /*
         Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
         */
        $(document).ready(function(){
            $('.filterable .btn-filter').click(function(){
                var $panel = $(this).parents('.filterable'),
                        $filters = $panel.find('.filters input'),
                        $tbody = $panel.find('.table tbody');
                if ($filters.prop('disabled') == true) {
                    $filters.prop('disabled', false);
                    $filters.first().focus();
                } else {
                    $filters.val('').prop('disabled', true);
                    $tbody.find('.no-result').remove();
                    $tbody.find('tr').show();
                }
            });

            $('.filterable .filters input').keyup(function(e){
                /* Ignore tab key */
                var code = e.keyCode || e.which;
                if (code == '9') return;
                /* Useful DOM data and selectors */
                var $input = $(this),
                        inputContent = $input.val().toLowerCase(),
                        $panel = $input.parents('.filterable'),
                        column = $panel.find('.filters th').index($input.parents('th')),
                        $table = $panel.find('.table'),
                        $rows = $table.find('tbody tr');
                /* Dirtiest filter function ever ;) */
                var $filteredRows = $rows.filter(function(){
                    var value = $(this).find('td').eq(column).text().toLowerCase();
                    return value.indexOf(inputContent) === -1;
                });
                /* Clean previous no-result if exist */
                $table.find('tbody .no-result').remove();
                /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
                $rows.show();
                $filteredRows.hide();
                /* Prepend no-result row if all rows are filtered */
                if ($filteredRows.length === $rows.length) {
                    $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
                }
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.templateDash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>