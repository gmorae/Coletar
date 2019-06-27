<?php
class MesModel extends CI_Model
{
    /**
     * Model responsaveis por datas do sistema 
     * Exibir dados anual e mensal
     * 
     */
    /**
     * Função ano retorna para o administrador
     * todas as coletas feita no ano
     */
    public function ano()
    {
        $ano = date('Y');
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo
        FROM users, cadastros
        WHERE users.id = cadastros.id_usuario
        AND YEAR( dia ) =  '" . $ano . "'
        ORDER BY cadastros.dia DESC";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data";
            $html .= " ás $row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_oleo) . '</td>';
            }
            $html .= "</tr>";
        }
        return $html;
    }

    /**
     * Função ultimoMes retorna para o administrador
     * as coletas do mes
     */
    public function ultimoMes()
    {

        $mes = date('m');
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo
        FROM users
        INNER JOIN cadastros ON users.id = cadastros.id_usuario
        AND MONTH( dia ) =  '" . $mes . "'
        ORDER BY cadastros.dia";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';

        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data ";
            $html .= "ás $row->horario</td>";
            $html .= "<td>$row->bairro</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_oleo) . '</td>';
            }
            $html .= "</tr>";
        }
        return $html;
    }

    /**
     * Retorna as coletas nos respectivos meses
     */
    public function janeiro()
    {
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and MONTH(dia) = '1' 
        ORDER BY cadastros.dia ";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data";
            $html .= " ás $row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_oleo) . '</td>';
            }
            $html .= "</tr>";
        }
        return $html;
    }

    public function fevereiro()
    {
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and MONTH(dia) = '2' 
        ORDER BY cadastros.dia ";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data";
            $html .= " ás $row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_oleo) . '</td>';
            }
            $html .= "</tr>";
        }
        return $html;
    }

    public function marco()
    {
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and MONTH(dia) = '3' 
        ORDER BY cadastros.dia ";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data";
            $html .= " ás $row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_oleo) . '</td>';
            }
            $html .= "</tr>";
        }
        return $html;
    }

    public function abril()
    {
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and MONTH(dia) = '4' 
        ORDER BY cadastros.dia ";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data";
            $html .= " ás $row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_oleo) . '</td>';
            }
            $html .= "</tr>";
        }
        return $html;
    }

    public function maio()
    {
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and MONTH(dia) = '5' 
        ORDER BY cadastros.dia ";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data";
            $html .= " ás $row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_oleo) . '</td>';
            }
            $html .= "</tr>";
        }
        return $html;
    }

    public function junho()
    {
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and MONTH(dia) = '6' 
        ORDER BY cadastros.dia ";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data";
            $html .= " ás $row->horario</td>";
            $html .= "<td>$row->bairro</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_oleo) . '</td>';
            }
            $html .= "</tr>";
        }
        return $html;
    }

    public function julho()
    {
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and MONTH(dia) = '7' 
        ORDER BY cadastros.dia ";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data";
            $html .= " ás $row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_oleo) . '</td>';
            }
            $html .= "</tr>";
        }
        return $html;
    }

    public function agosto()
    {
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and MONTH(dia) = '8' 
        ORDER BY cadastros.dia ";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data";
            $html .= " ás $row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_oleo) . '</td>';
            }
            $html .= "</tr>";
        }
        return $html;
    }

    public function setembro()
    {
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and MONTH(dia) = '9' 
        ORDER BY cadastros.dia ";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data";
            $html .= " ás $row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_oleo) . '</td>';
            }
            $html .= "</tr>";
        }
        return $html;
    }

    public function outubro()
    {
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and MONTH(dia) = '10'
        ORDER BY cadastros.dia ";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data";
            $html .= " ás $row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_oleo) . '</td>';
            }
            $html .= "</tr>";
        }
        return $html;
    }

    public function novembro()
    {
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and MONTH(dia) = '11'
        ORDER BY cadastros.dia ";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->first_name</td>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html .= "<td>$data";
            $html .= " ás $row->horario Horas</td>";
            $html .= "<td>$row->bairro</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_oleo) . '</td>';
            }
            $html .= "</tr>";
        }
        return $html;
    }

    public function dezembro()
    {
        $sql = "SELECT id_oleo, first_name, bairro, oleo, dia, horario, estado_oleo 
        FROM users, cadastros 
        WHERE users.id = cadastros.id_usuario 
        and MONTH(dia) = '12'
        ORDER BY cadastros.dia ";
        $rs = $this->db->query($sql);
        $m = $rs->result();
        $html = '';
        foreach ($m as $row) {
            $html .= "<tr class='text-center'>";
            $html .= "<td>$row->oleo Litros</td>";
            $data = date('d/m/Y', strtotime($row->dia));
            $html = "<td>$data</td>";
            $html .= "<td>$row->horario Horas</td>";
            if ($row->estado_oleo == '0') {
                $html .= '<td>' . $this->get_action_buttonsOleo($row->id_oleo) . '</td>';
            } else {
                $html .= '<td>' . $this->get_action_buttonsOleoColetado($row->id_oleo) . '</td>';
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
}
