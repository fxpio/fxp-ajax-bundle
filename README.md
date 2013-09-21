Sonatra Ajax Bundle
===================

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
