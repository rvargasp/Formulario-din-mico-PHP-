<?php 
include('./php/createForm.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="bd-example">
        <?php $data = getDataForm(); ?>
            <h1> Formulario dinámico </h1>
            <form action="<?php echo $data->action; ?>" method="<?php echo $data->method; ?>" id="<?php echo $data->id; ?>" class="form">
            <?php 
            foreach ($data->sections as $key => $section) 
            {
                if($section->visible)
                {
                    ?>
                    <h2><?php echo $section->title; ?></h2>
                    <?php
                    foreach ($section->fields as $key => $field) 
                    {
                        if($field->visible)
                        {
                            $readonly = $field->readonly ? "readonly" : "";
                            $required = $field->required ? "required" : "";
                            $multiple = $field->multiple ? "multiple" : "";
                            $function = isset($field->function) ? $field->function: "";
                            switch ($field->tag_html) {
                                case 'input':
                                    $e = '<input 
                                    id="' . $field->id . '" 
                                    name="' . $field->name . '" 
                                    type="' . $field->type . '" 
                                    class="' . $field->class . '" 
                                    placeholder="' . $field->placeholder . '" 
                                    '. $required . ' 
                                    '. $readonly . ' 
                                    required="' . $field->required . '" 
                                    value="' . $field->value . '" 
                                    />';
                                    break;
                                case 'select':
                                    $options = '';
                                    foreach ($field->options as $key => $option) {
                                        $options .= '<option value="' .$option. '">' .$option. '</option>'; 
                                    } 
                                    $e = '<select 
                                    id="' . $field->id . '" 
                                    name="' . $field->name . '" 
                                    class="' . $field->class . '" 
                                    placeholder="' . $field->placeholder . '"
                                    '. $required . ' 
                                    '. $readonly . ' 
                                    '. $multiple . ' 
                                    '. $function . ' 
                                    />'. $options .' 
                                    </select>';
                                    break;
                                default:
                                    break;
                            }
                        ?>
                        <div class="mb-3">
                            <label class="form-label"><?php echo $field->label; ?></label>
                            <?php echo $e; ?>
                        </div>    
                        <?php
                        }
                    }
                }
            }

            ?>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="./js/functions.js"></script>

</body>
</html>