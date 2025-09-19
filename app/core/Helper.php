<?php
class Helper
{
    private static $instances = [];

    private function __construct() {}

    public static function getInstance(): Helper
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new Helper();
        }
        return self::$instances[$cls];
    }

    /**
     * Está função é responsável para converte uma data do padrão 'ano-mes-dia  hh:mm:ss' para 'dia/mes/ano hh:mm:ss'
     * @param String $date - ano-mes-dia  hh:mm:ss
     * r
     * @access protected
     * @return $date - data formatada no padrão brasileiro
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function formatDateViewComplet($date)
    {
        $datatime = explode(" ", $date);
        $arrayDate = explode("-", $datatime[0]);
        if (count($arrayDate) == 3) {
            return $arrayDate[2] . '/' . $arrayDate[1] . '/' . $arrayDate[0] . ' ' . $datatime[1];
        } else {
            return false;
        }
    }

    /**
     * Está função é responsável para converte uma data do padrão 'dia/mes/ano hh:mm:ss' para 'ano-mes-dia  hh:mm:ss'
     * @param String $date - dia/mes/ano hh:mm:ss
     * r
     * @access protected
     * @return $date - data formatada no padrão brasileiro
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function formatDateDBComplet($date)
    {
        $datatime = explode(" ", $date);
        $arrayDate = explode("/", $datatime[0]);
        if (count($arrayDate) == 3) {
            return $arrayDate[2] . '-' . $arrayDate[1] . '-' . $arrayDate[0] . ' ' . $datatime[1];
        } else {
            return false;
        }
    }

    /**
     * Está função é responsável para converte uma data do padrão 'ano-mes-dia' para 'dia/mes/ano hh:mm:ss'
     * @param String $date - ano-mes-dia 
     * r
     * @access protected
     * @return $date - data formatada no padrão brasileiro
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function formatDateView($date)
    {
        $arrayDate = explode("-", $date);
        if (count($arrayDate) == 3) {
            return $arrayDate[2] . '/' . $arrayDate[1] . '/' . $arrayDate[0];
        } else {
            return false;
        }
    }

    /**
     * Está função é responsável para converte uma data do padrão 'dia/mes/ano' para 'ano-mes-dia'
     * @param String $date - dia/mes/ano
     * r
     * @access protected
     * @return $date - data formatada no padrão brasileiro
     * @author Joab Torres <joabtorres1508@gmail.com>
     */
    public function formatDateDB($date)
    {
        $arrayDate = explode("/", $date);
        if (count($arrayDate) == 3) {
            return $arrayDate[2] . '-' . $arrayDate[1] . '-' . $arrayDate[0];
        } else {
            return false;
        }
    }
}
