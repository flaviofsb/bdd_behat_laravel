<?php
use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;
use GuzzleHttp\Client;
use PHPUnit\Framework\Assert;
class FeatureContext implements Context
{
    protected $cep;
    protected $response;
    protected $responseCode;
    protected $client;
    protected $url;
    protected $dadosEndereco;
    public function __construct()
    {
        // instantiate context
    }

    /**
     * @Given que eu queira realizar uma pesquisa na api do viacep,
     */
    public function queEuQueiraRealizarUmaPesquisaNaApiDoViacep()
    {
        $this->url = 'http://viacep.com.br/ws/';
        $this->client = new GuzzleHttp\Client(['base_url'=> $this->url ]);        
        if ($this->client){
            return true;
        } else {
            return false;
        }
    }

    /**
     * @When Eu informar na pesquisa :arg1
     */
    public function euInformarNaPesquisa($cep)
    {
        
        if ($cep){
            $this->response = $this->client->get(uri: $this->url . $cep . '/json/');
            $this->responseCode = $this->response->getStatusCode();
            $this->cep = $cep;           
            if ($this->responseCode != '200'){
                //throw new Exception(message: 'O cep não foi encontrado');
                return false;
            } else {    
                return true;
            }
        } else {
            //throw new Exception(message: 'O cep não foi preenchido');
            return false;
        }
    }

    /**
     * @Then Eu devo ter como resposta um json contendo os dados de resposta a busca ou retornar falso
     */
    public function euDevoTerComoRespostaUmJsonContendoOsDadosDeRespostaABuscaOuRetornarFalso()
    {
        if ($this->responseCode != '200'){    
            //throw new Exception(message: 'O ceaap não foi encontrado');
            return false;
        } else {
            $dadosEndereco = json_decode($this->response->getBody(), true);
           
           if (array_key_exists("erro",$dadosEndereco)){
                //throw new Exception(message: 'O cep não foi enaacontrado');
                return false;
            }else {
            //var_dump($dadosEndereco);
                return $dadosEndereco;
            }
        }
    }
}
?>