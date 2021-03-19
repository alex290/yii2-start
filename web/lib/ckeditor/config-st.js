/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function(config) {
    config.toolbarGroups = [
        { name: 'document', groups: ['mode', 'document', 'doctools'] },
        { name: 'clipboard', groups: ['clipboard', 'undo'] },
        { name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing'] },
        { name: 'forms', groups: ['forms'] },
        { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
        { name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph'] },
        { name: 'links', groups: ['links'] },
        { name: 'insert', groups: ['insert'] },
        { name: 'styles', groups: ['styles'] },
        { name: 'colors', groups: ['colors'] },
        { name: 'tools', groups: ['tools'] },
        { name: 'others', groups: ['others'] },
        { name: 'about', groups: ['about'] }
    ];

    config.removeButtons = 'About,ShowBlocks,Styles,Iframe,PageBreak,Flash,HorizontalRule,Smiley,SpecialChar,Anchor,Language,BidiRtl,BidiLtr,CreateDiv,Blockquote,HiddenField,ImageButton,Button,Select,Textarea,TextField,Radio,Checkbox,Form,SelectAll,Scayt,Find,Replace,Redo,Undo,Templates,Save,NewPage,ExportPdf,Preview,Print';
    config.filebrowserBrowseUrl = '/web/lib/elfinder/86HLFcmfWJ5UW5PHPJgAFXRC.html'; // eg. 'includes/elFinder/elfinder-cke.html'

    config.contentsCss = ['/web/css/main.css', '/web/css/bootstrap/bootstrap.min.css'];
};