fis.config.set('roadmap.domain', '.');

//后缀名的less的文件使用fis-parser-less编译
//modules.parser.less表示设置后缀名为less的文件的parser，第二个less表示使用fis-parser-less进行编译
fis.config.set('modules.parser.less', 'less');
//将less文件编译为css
fis.config.set('roadmap.ext.less', 'css');

fis.config.set('roadmap.path', [

    {
        reg: /\/_[^\/]*?$/i,
        release: false
    },
    {
        reg : /readme.md|fis-conf.js/ig,
        //编译的时候不要产出了
        release : false
    }
]);