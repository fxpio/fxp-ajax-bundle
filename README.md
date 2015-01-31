Sonatra Ajax Bundle
===================

[![Latest Version](https://img.shields.io/packagist/v/sonatra/ajax-bundle.svg)](https://packagist.org/packages/sonatra/ajax-bundle)
[![Build Status](https://img.shields.io/travis/sonatra/SonatraAjaxBundle/master.svg)](https://travis-ci.org/sonatra/SonatraAjaxBundle)
[![Coverage Status](https://img.shields.io/coveralls/sonatra/SonatraAjaxBundle/master.svg)](https://coveralls.io/r/sonatra/SonatraAjaxBundle?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sonatra/SonatraAjaxBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/sonatra/SonatraAjaxBundle?branch=master)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/199a01f9-dd83-4f81-b1d2-c1d4fb00868a.svg)](https://insight.sensiolabs.com/projects/199a01f9-dd83-4f81-b1d2-c1d4fb00868a)

The Sonatra AjaxBundle allow to intercept the ajax request identified by the event dispatcher.
It allows, for example, for view controller to indicating to the event dispatcher, the answer 
to be built, if the AJAX request with the identifier is find.

Mainly used for Symfony2 custom form type with ajax interactions.

Features include:

- Event listener for data injection (used by the controller for example)
- Event listener for kernel response (replace response by the json/xml data formatted)

Documentation
-------------

The bulk of the documentation is stored in the `Resources/doc/index.md`
file in this bundle:

[Read the Documentation](Resources/doc/index.md)

Installation
------------

All the installation instructions are located in [documentation](Resources/doc/index.md).

License
-------

This bundle is under the MIT license. See the complete license in the bundle:

[Resources/meta/LICENSE](Resources/meta/LICENSE)

About
-----

Sonatra AjaxBundle is a [sonatra](https://github.com/sonatra) initiative.
See also the list of [contributors](https://github.com/sonatra/SonatraAjaxBundle/contributors).

Reporting an issue or a feature request
---------------------------------------

Issues and feature requests are tracked in the [Github issue tracker](https://github.com/sonatra/SonatraAjaxBundle/issues).

When reporting a bug, it may be a good idea to reproduce it in a basic project
built using the [Symfony Standard Edition](https://github.com/symfony/symfony-standard)
to allow developers of the bundle to reproduce the issue by simply cloning it
and following some steps.
