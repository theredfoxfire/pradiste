<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fragment.renderer.hinclude' shared service.

$this->services['fragment.renderer.hinclude'] = $instance = new \Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, ${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('VsDb7YT5jEihg5g6gH6nsyzeG4FIMxrM8gcoauetAvSXZTsQnvzfxA52')) && false ?: '_'}, NULL);

$instance->setFragmentPath('/_fragment');

return $instance;
