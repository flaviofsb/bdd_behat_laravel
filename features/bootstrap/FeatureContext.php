<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Tester\Exception\PendingException;

class FeatureContext implements Context
{
    public function __construct()
    {
        // instantiate context
    }
/**
     * @Given que exista um cep :arg1,
     */
    public function queExistaUmCep($arg1)
    {
        throw new PendingException();
    }

    /**
     * @When Eu informar :arg1 na pesquisa
     */
    public function euInformarNaPesquisa($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then Eu devo ter como resposta um json contendo os dados de resposta a busca
     */
    public function euDevoTerComoRespostaUmJsonContendoOsDadosDeRespostaABusca()
    {
        throw new PendingException();
    }

    /**
     * @Given que exista não exista o cep :arg1,
     */
    public function queExistaNaoExistaOCep($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then Eu devo ter como resposta um json informando erro como resposta
     */
    public function euDevoTerComoRespostaUmJsonInformandoErroComoResposta()
    {
        throw new PendingException();
    }
}
?>