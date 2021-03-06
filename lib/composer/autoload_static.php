<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9c76582a9ba728ed7cb25414795ad59f
{
    public static $files = array (
        'f084d01b0a599f67676cffef638aa95b' => __DIR__ . '/..' . '/smarty/smarty/libs/bootstrap.php',
    );

    public static $classMap = array (
        'Alternativas' => __DIR__ . '/../..' . '/model/Alternativas.class.php',
        'Avaliacoes' => __DIR__ . '/../..' . '/model/Avaliacoes.class.php',
        'Categorias' => __DIR__ . '/../..' . '/model/Categorias.class.php',
        'Competencias' => __DIR__ . '/../..' . '/model/Competencias.class.php',
        'Conexao' => __DIR__ . '/../..' . '/model/Conexao.class.php',
        'Config' => __DIR__ . '/../..' . '/model/Config.class.php',
        'Cursos' => __DIR__ . '/../..' . '/model/Cursos.class.php',
        'Disciplinas' => __DIR__ . '/../..' . '/model/Disciplinas.class.php',
        'DisciplinasAvaliacao' => __DIR__ . '/../..' . '/model/DisciplinasAvaliacao.class.php',
        'ImageUpload' => __DIR__ . '/../..' . '/model/ImageUpload.class.php',
        'Login' => __DIR__ . '/../..' . '/model/Login.class.php',
        'Noticias' => __DIR__ . '/../..' . '/model/Noticias.class.php',
        'Paginacao' => __DIR__ . '/../..' . '/model/Paginacao.class.php',
        'Perfis' => __DIR__ . '/../..' . '/model/Perfis.class.php',
        'Questoes' => __DIR__ . '/../..' . '/model/Questoes.class.php',
        'Rotas' => __DIR__ . '/../..' . '/model/Rotas.class.php',
        'Sistema' => __DIR__ . '/../..' . '/model/Sistema.class.php',
        'Template' => __DIR__ . '/../..' . '/model/Template.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit9c76582a9ba728ed7cb25414795ad59f::$classMap;

        }, null, ClassLoader::class);
    }
}
