<?php

namespace Buzz\Client;

abstract class AbstractClient implements ClientInterface
{
    protected $ignoreErrors = true;
    protected $maxRedirects = 5;
    protected $timeout = 5;
    protected $verifyPeer = true;
    protected $verifyHost = 2;
    protected $sslCertificate;
    protected $sslCertificatePassphrase;
    protected $proxy;

    public function setIgnoreErrors($ignoreErrors)
    {
        $this->ignoreErrors = $ignoreErrors;
    }

    public function getIgnoreErrors()
    {
        return $this->ignoreErrors;
    }

    public function setMaxRedirects($maxRedirects)
    {
        $this->maxRedirects = $maxRedirects;
    }

    public function getMaxRedirects()
    {
        return $this->maxRedirects;
    }

    public function setTimeout($timeout)
    {
        $this->timeout = $timeout;
    }

    public function getTimeout()
    {
        return $this->timeout;
    }

    public function setVerifyPeer($verifyPeer)
    {
        $this->verifyPeer = $verifyPeer;
    }

    public function getVerifyPeer()
    {
        return $this->verifyPeer;
    }

    public function getVerifyHost()
    {
        return $this->verifyHost;
    }

    public function setVerifyHost($verifyHost)
    {
        $this->verifyHost = $verifyHost;
    }

    public function setProxy($proxy)
    {
        $this->proxy = $proxy;
    }

    public function getProxy()
    {
        return $this->proxy;
    }

    public function setSslCertificate($sslCertificate)
    {
        $this->sslCertificate = $sslCertificate;
    }

    public function getSslCertificate()
    {
        return $this->sslCertificate;
    }

    public function setSslCertificatePassphrase($sslCertificatePassphrase)
    {
        $this->sslCertificatePassphrase = $sslCertificatePassphrase;
    }

    public function getSslCertificatePassphrase()
    {
        return $this->sslCertificatePassphrase;
    }
}
