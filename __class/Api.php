<?php 

Class Api 
{
    /**
     * Chave de acesso
     *
     * @var string
     */
    private $key    = 'edaa6a2e';

    /**
     * Conteudo da pesquisa
     *
     * @var string
     */
    private $search = '';

    public function __construct($search)
    {
        $text = str_replace(' ', '%20', $search);

        $this->search = "http://www.omdbapi.com/?t={$text}&apikey={$this->key}";

        return $this->search;
    }

    public function getDados()
    {
        $dados = [];
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->search);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    
        $dados = curl_exec($ch);

        curl_close($ch);    

        return $dados;
    }
}