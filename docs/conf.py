# -*- coding: utf-8 -*-

notfound_context = {
    'body': '<h1>BLT Documentation has moved</h1><p>Please refer to the documentation at <a href="https://docs.acquia.com/blt">https://docs.acquia.com/blt</a>.</p><p>You may continue to contribute to the documentation by opening pull requests at <a href="https://github.com/acquia/blt">https://github.com/acquia/blt</a>.</p>',
}

# Default settings
project = 'Acquia BLT'
extensions = [
    'sphinx_autorun',
    'notfound.extension',
]



# Include all your settings here
html_theme = 'sphinx_rtd_theme'
