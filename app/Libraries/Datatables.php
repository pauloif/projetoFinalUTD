<?php  

    namespace App\Libraries;
    use App\Controllers\BaseController;
   

    class Datatables
    { 
        // This function converts a string into slug format
        public function slugify($text)
        {
            // replace non letter or digits by -
            $text = preg_replace('~[^\pL\d]+~u', '-', $text);

            // transliterate
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

            // remove unwanted characters
            $text = preg_replace('~[^-\w]+~', '', $text);

            // trim
            $text = trim($text, '-');

            // remove duplicate -
            $text = preg_replace('~-+~', '-', $text);

            // lowercase
            $text = strtolower($text);

            if (empty($text)) {
                return 'n-a';
            }

            return $text;
        }

        

        public function render()
        {
            $data['js'][] = (base_url()."/public/plugins/datatables/jquery.dataTables.min.js");
            $data['js'][] = (base_url()."/public/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js");
            $data['js'][] = (base_url()."/public/plugins/datatables-responsive/js/dataTables.responsive.min.js");
            $data['js'][] = (base_url()."/public/plugins/datatables-responsive/js/responsive.bootstrap4.min.js");
            $data['js'][] = (base_url()."/public/plugins/datatables-buttons/js/dataTables.buttons.min.js");
            $data['js'][] = (base_url()."/public/plugins/datatables-buttons/js/buttons.bootstrap4.min.js");
            $data['js'][] = (base_url()."/public/plugins/jszip/jszip.min.js");
            $data['js'][] = (base_url()."/public/plugins/pdfmake/pdfmake.min.js");
            $data['js'][] = (base_url()."/public/plugins/pdfmake/vfs_fonts.js");
            $data['js'][] = (base_url()."/public/plugins/datatables-buttons/js/buttons.html5.min.js");
            $data['js'][] = (base_url()."/public/plugins/datatables-buttons/js/buttons.print.min.js");
            $data['js'][] = (base_url()."/public/plugins/datatables-buttons/js/buttons.colVis.min.js"); 
            
            //<!-- DataTables -->
            $data['css'][] = base_url()."/public/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css";
            $data['css'][] = base_url()."/public/plugins/datatables-responsive/css/responsive.bootstrap4.min.css";
            $data['css'][] = base_url()."/public/plugins/datatables-buttons/css/buttons.bootstrap4.min.css";
            
            return $data;
    
        }
    }


?>