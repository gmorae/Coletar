<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BairroModel extends CI_Model
{
    /**
     * Model responsavel por: 
     * Trazer os dados para preencher as tabelas
     * dos bairros mais coletados
     */

    public function mooca()
    {
        $bairro = 'mooca';
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and users.bairro = '" . $bairro . "'
        and cadastros.estado_oleo = 0
        ORDER BY cadastros.dia";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data</td>";
            $html .= "<td>$row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($data > date('d/m/Y')) {
                $html .= '<td>' . $this->get_action_buttonsOleoOutroDia($row->id_oleo) . '</td>';
            } else {
                if ($data == date('d/m/Y h:i')) {
                    $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
                }else {
                    if($data < date('d/m/Y h:i')){
                        $html .= '<td>' . $this->get_action_buttonsOleoPrazo($row->id_oleo) . '</td>';
                    }
                }
            }
            $html .= "</tr>";
        }
        return $html;
    }
    public function ema()
    {
        $bairro = 'vila ema';
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and users.bairro = '" . $bairro . "'
        and cadastros.estado_oleo = 0
        ORDER BY cadastros.dia";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data</td>";
            $html .= "<td>$row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($data > date('d/m/Y')) {
                $html .= '<td>' . $this->get_action_buttonsOleoOutroDia($row->id_oleo) . '</td>';
            } else {
                if ($data == date('d/m/Y h:i')) {
                    $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
                }else {
                    if($data < date('d/m/Y h:i')){
                        $html .= '<td>' . $this->get_action_buttonsOleoPrazo($row->id_oleo) . '</td>';
                    }
                }
            }
            $html .= "</tr>";
        }
        return $html;
    }
    public function zelina()
    {
        $bairro = 'vila zelina';
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and users.bairro = '" . $bairro . "'
        and cadastros.estado_oleo = 0
        ORDER BY cadastros.dia";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data</td>";
            $html .= "<td>$row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($data > date('d/m/Y')) {
                $html .= '<td>' . $this->get_action_buttonsOleoOutroDia($row->id_oleo) . '</td>';
            } else {
                if ($data == date('d/m/Y h:i')) {
                    $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
                }else {
                    if($data < date('d/m/Y h:i')){
                        $html .= '<td>' . $this->get_action_buttonsOleoPrazo($row->id_oleo) . '</td>';
                    }
                }
            }
            $html .= "</tr>";
        }
        return $html;
    }
    public function prudente()
    {
        $bairro = 'vila prudente';
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and users.bairro = '" . $bairro . "'
        and cadastros.estado_oleo = 0
        ORDER BY cadastros.dia";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data</td>";
            $html .= "<td>$row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($data > date('d/m/Y')) {
                $html .= '<td>' . $this->get_action_buttonsOleoOutroDia($row->id_oleo) . '</td>';
            } else {
                if ($data == date('d/m/Y h:i')) {
                    $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
                }else {
                    if($data < date('d/m/Y h:i')){
                        $html .= '<td>' . $this->get_action_buttonsOleoPrazo($row->id_oleo) . '</td>';
                    }
                }
            }
            $html .= "</tr>";
        }
        return $html;
    }
    public function tatuape()
    {
        $bairro = 'tatuapé';
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and users.bairro = '" . $bairro . "'
        and cadastros.estado_oleo = 0
        ORDER BY cadastros.dia";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data</td>";
            $html .= "<td>$row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($data > date('d/m/Y')) {
                $html .= '<td>' . $this->get_action_buttonsOleoOutroDia($row->id_oleo) . '</td>';
            } else {
                if ($data == date('d/m/Y h:i')) {
                    $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
                }else {
                    if($data < date('d/m/Y h:i')){
                        $html .= '<td>' . $this->get_action_buttonsOleoPrazo($row->id_oleo) . '</td>';
                    }
                }
            }
            $html .= "</tr>";
        }
        return $html;
    }
    public function analia()
    {
        $bairro = 'ánalia franco';
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and users.bairro = '" . $bairro . "'
        and cadastros.estado_oleo = 0
        ORDER BY cadastros.dia";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data</td>";
            $html .= "<td>$row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($data > date('d/m/Y')) {
                $html .= '<td>' . $this->get_action_buttonsOleoOutroDia($row->id_oleo) . '</td>';
            } else {
                if ($data == date('d/m/Y h:i')) {
                    $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
                }else {
                    if($data < date('d/m/Y h:i')){
                        $html .= '<td>' . $this->get_action_buttonsOleoPrazo($row->id_oleo) . '</td>';
                    }
                }
            }
            $html .= "</tr>";
        }
        return $html;
    }
    public function lucas()
    {
        $bairro = 'parque são lucas';
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and users.bairro = '" . $bairro . "'
        and cadastros.estado_oleo = 0
        ORDER BY cadastros.dia";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data</td>";
            $html .= "<td>$row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($data > date('d/m/Y')) {
                $html .= '<td>' . $this->get_action_buttonsOleoOutroDia($row->id_oleo) . '</td>';
            } else {
                if ($data == date('d/m/Y h:i')) {
                    $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
                }else {
                    if($data < date('d/m/Y h:i')){
                        $html .= '<td>' . $this->get_action_buttonsOleoPrazo($row->id_oleo) . '</td>';
                    }
                }
            }
            $html .= "</tr>";
        }
        return $html;
    }
    public function agua()
    {
        $bairro = 'água rasa';
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and users.bairro = '" . $bairro . "'
        and cadastros.estado_oleo = 0
        ORDER BY cadastros.dia";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data</td>";
            $html .= "<td>$row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($data > date('d/m/Y')) {
                $html .= '<td>' . $this->get_action_buttonsOleoOutroDia($row->id_oleo) . '</td>';
            } else {
                if ($data == date('d/m/Y h:i')) {
                    $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
                }else {
                    if($data < date('d/m/Y h:i')){
                        $html .= '<td>' . $this->get_action_buttonsOleoPrazo($row->id_oleo) . '</td>';
                    }
                }
            }
            $html .= "</tr>";
        }
        return $html;
    }
    public function ivone()
    {
        $bairro = 'vila ivone';
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and users.bairro = '" . $bairro . "'
        and cadastros.estado_oleo = 0
        ORDER BY cadastros.dia";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data</td>";
            $html .= "<td>$row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($data > date('d/m/Y')) {
                $html .= '<td>' . $this->get_action_buttonsOleoOutroDia($row->id_oleo) . '</td>';
            } else {
                if ($data == date('d/m/Y h:i')) {
                    $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
                }else {
                    if($data < date('d/m/Y h:i')){
                        $html .= '<td>' . $this->get_action_buttonsOleoPrazo($row->id_oleo) . '</td>';
                    }
                }
            }
            $html .= "</tr>";
        }
        return $html;
    }
    public function bancario()
    {
        $bairro = 'bancario';
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and users.bairro = '" . $bairro . "'
        and cadastros.estado_oleo = 0
        ORDER BY cadastros.dia";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data</td>";
            $html .= "<td>$row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($data > date('d/m/Y')) {
                $html .= '<td>' . $this->get_action_buttonsOleoOutroDia($row->id_oleo) . '</td>';
            } else {
                if ($data == date('d/m/Y h:i')) {
                    $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
                }else {
                    if($data < date('d/m/Y h:i')){
                        $html .= '<td>' . $this->get_action_buttonsOleoPrazo($row->id_oleo) . '</td>';
                    }
                }
            }
            $html .= "</tr>";
        }
        return $html;
    }
    public function primavera()
    {
        $bairro = 'primavera';
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and users.bairro = '" . $bairro . "'
        and cadastros.estado_oleo = 0
        ORDER BY cadastros.dia";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data</td>";
            $html .= "<td>$row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($data > date('d/m/Y')) {
                $html .= '<td>' . $this->get_action_buttonsOleoOutroDia($row->id_oleo) . '</td>';
            } else {
                if ($data == date('d/m/Y h:i')) {
                    $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
                }else {
                    if($data < date('d/m/Y h:i')){
                        $html .= '<td>' . $this->get_action_buttonsOleoPrazo($row->id_oleo) . '</td>';
                    }
                }
            }
            $html .= "</tr>";
        }
        return $html;
    }
    private function get_action_buttonsOleo($id)
    {
        $html = '<a href="' . base_url('index.php/adm/adicionaOleo/' . $id) . '">
        <button type="button" class="btn btn-outline-success btn-sm waves-effect">Coletar</button></i></a>';
        return $html;
    }
    private function get_action_buttonsOleoColetado($id)
    {

        $html = '<button type="button" class="btn btn-outline-grey btn-sm">Coletado</button></i>';
        return $html;
    }
    private function get_action_buttonsOleoPrazo($id)
    {
        $html = '<a href="' . base_url('index.php/adm/adicionaOleo/' . $id) . '">
            <button type="button" class="btn btn-outline-warning btn-sm waves-effect">Coleta atrasada</button>
        </a>';
        return $html;
    }
    private function get_action_buttonsOleoOutroDia($id)
    {
        $html = '<button type="button" class="btn btn-outline-danger btn-sm waves-effect">Coleta bloqueada</button>';
        return $html;
    }
}
