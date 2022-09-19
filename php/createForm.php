<?php
function getDataForm()
{
    $json = '
    {
        "id": "frm1",
        "type": 2,
        "action": "registerUser",
        "method": "POST",
        "buttons" : 
        [
            {
            }
        ],
        "sections": 
        [
            {
                "order": 1,
                "visible": true,
                "title": "Sección 1",
                "fields": 
                [
                    {
                        "order": 1,
                        "label": "Sección 1 - Campo 1",
                        "name": "Seccion1Campo1",
                        "id": "Seccion1Campo1",
                        "value": "",
                        "visible": true,
                        "placeholder": "Campo 1 de la sección 1",
                        "tag_html": "input",
                        "type": "date",
                        "class": "form-control",
                        "required": true,
                        "readonly": false,
                        "multiple": false,
                        "options": [],
                        "help": null
                    },
                    {
                        "order": 2,
                        "label": "Sección 1 - Campo 2",
                        "name": "Seccion1Campo2",
                        "id": "Seccion1Campo2",
                        "value": "",
                        "visible": true,
                        "placeholder": "Campo 2 de la sección 1",
                        "tag_html": "input",
                        "type": "text",
                        "class": "form-control",
                        "required": true,
                        "readonly": false,
                        "multiple": false,
                        "options": [],
                        "help": "Texto de ayuda para tooltip"
                    },
                    {
                        "order": 3,
                        "label": "Sección 1 - Campo 3",
                        "name": "Seccion1Campo3",
                        "id": "Seccion1Campo3",
                        "value": "",
                        "visible": true,
                        "placeholder": "Campo 3 de la sección 1",
                        "tag_html": "input",
                        "type": "text",
                        "class": "form-control",
                        "required": true,
                        "readonly": false,
                        "multiple": false,
                        "options": [],
                        "help": null
                    }
                ]
            },
            {
                "order": 2,
                "visible": true,
                "title": "Sección 2",
                "fields": 
                [
                    {
                        "order": 1,
                        "label": "Sección 2 - Campo 1",
                        "name": "Seccion2Campo2",
                        "id": "Seccion2Campo2",
                        "value": "Campo 2",
                        "visible": true,
                        "placeholder": "Campo 1 de la sección 2",
                        "tag_html": "select",
                        "type": null,
                        "class": "form-select",
                        "required": true,
                        "readonly": false,
                        "multiple": false,
                        "options": [1,2,3,4,5,6,7,8,9,10],
                        "help": null
                    },
                    {
                        "order": 2,
                        "label": "Sección 2 - Campo 2",
                        "name": "Seccion2Campo2",
                        "id": "Seccion2Campo2",
                        "value": "Seccion2Campo2",
                        "visible": true,
                        "placeholder": "Campo 2 de la sección 2",
                        "tag_html": "select",
                        "type": null,
                        "class": "form-select",
                        "required": false,
                        "readonly": true,
                        "multiple": false,
                        "options": ["Opcion 1","Opcion 2","Opcion 3"],
                        "function": "onchange=changeOption(this)",
                        "help": null
                    },
                    {
                        "order": 3,
                        "label": "Sección 2 - Campo 3",
                        "name": "Seccion2Campo3",
                        "id": "Seccion2Campo3",
                        "value": "0123456789",
                        "visible": true,
                        "placeholder": "Este campo contiene texto",
                        "tag_html": "input",
                        "type": "password",
                        "class": "form-control",
                        "required": false,
                        "readonly": true,
                        "multiple": false,
                        "options": [],
                        "help": "Campo con formato de contraseña y texto por defecto"
                    },
                    {
                        "order": 4,
                        "label": "Sección 2 - Campo 4",
                        "name": "Seccion2Campo4",
                        "id": "Seccion2Campo4",
                        "value": "",
                        "visible": true,
                        "placeholder": "Select múltiple",
                        "tag_html": "select",
                        "type": "",
                        "class": "form-select",
                        "required": false,
                        "readonly": false,
                        "multiple": true,
                        "options": ["Rojo","Verde","Amarillo","Azul"],
                        "help": ""
                    }
                ]
            }
        ]
    }';

    return json_decode($json, false);
}

?>
