<?php
    class User{
        public function form(){
            #empty verifie si la valeur existe dans le champ
                            #isset verifie si la variable existe
                            # tester le code PHP
                        //    print_r($_POST)
                        foreach ($_POST as $key => $value) {
                            # condition
                            #htmlentities et htmlspecialchars pour securiser 
                            !empty($value) ? print "<li class = \"success\">$key : ".htmlentities($value)."</li>":
                            print "<li class = \"warning\">Remplir le champs $key</li>";
                        }
        }
    }
    $form = new User();
    $form->form();
?>
