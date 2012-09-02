<?php

class SlownikStruktura extends Model {
	
	function GetSlownik($language)
	{
            if($language == "pl" ){
                $q = $this->db->query("SELECT klucz, wartoscPL as wartosc FROM slownik WHERE klucz not like 'tab%'");
            }else{
                $q = $this->db->query("SELECT klucz, wartoscEN as wartosc FROM slownik WHERE klucz not like 'tab%'");
            }
            
            if($q->num_rows() > 0){
                foreach ($q->result() as $row){
                    $data[$row->klucz] = $row;
                }
                return $data;
            }
	}
        
        function GetTabs($language)
	{
            if($language == "pl" ){
                $q = $this->db->query("SELECT klucz, wartoscPL as wartosc, dod1 as url FROM slownik WHERE klucz like 'tab%' ORDER BY klucz");
            }else{
                $q = $this->db->query("SELECT klucz, wartoscEN as wartosc, dod1 as url FROM slownik WHERE klucz like 'tab%' ORDER BY klucz");
            }
            
            if($q->num_rows() > 0){
                foreach ($q->result() as $row){
                    $data[] = $row;
                }
                return $data;
            }
	}
}

/* End of file welcome.php */
/* Location: ./system/application/controllers/welcome.php */