<?php
    function affiche_menu()
    {
        // tableaux contenant les liens d'accès et le texte à afficher
//        $tab_menu_lien = array( "soins_du_visage.php", "soins_du_corps.php", "epilations.php", "maquillage.php", "prothesie_ongulaire.php", "lipomodelage.php", "uv.php", "prestations.php");
//        $tab_menu_texte = array( "Soins du visage", "Soins du corps", "Epilations", "Maquillage", "Prothésie ongulaire", "Lipomodelage", "UV", "Prestations");

        $tab_menu_lien = array( "soins_du_visage.php", "soins_du_corps.php", "amincissement.php", "autres.php");
        $tab_menu_texte = array( "Soins du visage", "Soins du corps", "Amincissement", "Autres");

        // informations sur la page
        $info = pathinfo($_SERVER['PHP_SELF']);
        $menu = "\n<div id=\"menu\">\n    <ul id=\"onglets\">\n";

        // boucle qui parcours les deux tableaux
        foreach($tab_menu_lien as $cle=>$lien)
        {
            $menu .= "    <li";
            // si le nom du fichier correspond à celui pointé par l'indice, alors on l'active


            if($info['basename'] == $lien && $tab_menu_texte[$cle] == "Autres") {
                $menu .= " class=\"active last\"";
            } elseif ($tab_menu_texte[$cle] == "UV") {
                $menu .= " class=\"last\"";
            } elseif( $info['basename'] == $lien ) {
                $menu .= " class=\"active\"";
            }

//            if($info['basename'] == $lien && $tab_menu_texte[$cle] == "UV") {
//                $menu .= " class=\"active last\"";
//            } elseif ($tab_menu_texte[$cle] == "UV") {
//                $menu .= " class=\"last\"";
//            } elseif( $info['basename'] == $lien ) {
//                $menu .= " class=\"active\"";
//            }



            $menu .= "><a href=\"" . $lien . "\">" . $tab_menu_texte[$cle] . "</a></li>\n";
        }
        $menu .= "</ul>\n</div>";
        // on renvoie le code xHTML
        return $menu;        
    }
?>