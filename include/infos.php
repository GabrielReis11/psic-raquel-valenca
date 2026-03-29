<?php
/**
 * CONFIGURAÇÕES GERAIS DO SITE
 */
$site_config = [
    'nome_cliente'    => 'Psícologa Raquel Valença',
    'segmento'        => 'Psícologia', // Ex: Psicologia, Advocacia
    'descricao_seo'   => 'Descrição curta para o Google (máx 160 caracteres).',
    'keywords'        => 'psícologa, gestalt-terapia, cuidado humanizado',
    'favicon'         => 'favicon.png',
    'cor_tema'        => '#F6C657', // Cor principal para a barra do navegador mobile
];

/**
 * CONTATOS E REDES SOCIAIS
 */
$contatos = [
    'whatsapp' => [
        'numero'   => '5579999116883',
        'mensagem' => 'Olá! Vi seu site e gostaria de mais informações.',
    ],
    'instagram' => 'https://www.instagram.com/raquelvalenca.psi/',
    'facebook'  => 'https://facebook.com/seu-perfil',
    'email'     => ' raquelvalenca26@gmail.com',
    'endereco'  => 'Rua Exemplo, 123 - Cidade/UF',
];

/**
 * SERVIÇOS
 */
$servicos = [
    [
        'titulo' => 'Serviço 01',
        'imagem' => 'img/servicos/servico1.png',
        'desc'   => 'Descrição curta do serviço.',
    ],
    [
        'titulo' => 'Serviço 02',
        'imagem' => 'img/servicos/servico2.png',
        'desc'   => 'Descrição curta do serviço.',
    ],
];

/**
 * PLUGINS ATIVOS (Controle de carregamento de scripts)
 */
$plugins = [
    'aos'      => true, // Animate On Scroll
    'lightbox' => false, // Galeria de fotos
    'swiper'   => false, // Slider/Carrossel
];

/**
 * FUNÇÕES AUXILIARES
 */

// Gera link do WhatsApp
function getWhatsLink($contatos) {
    return "https://wa.me/" . $contatos['whatsapp']['numero'] . "?text=" . urlencode($contatos['whatsapp']['mensagem']);
}

// Busca fotos na galeria automaticamente
function getGaleria($diretorio = 'img/galeria/') {
    $fotos = glob($diretorio . "{*.jpg,*.jpeg,*.png,*.webp}", GLOB_BRACE);
    return $fotos ? $fotos : [];
}
?>
