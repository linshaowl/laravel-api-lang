<?php

/**
 * 消息翻译
 * @param string|null $key
 * @param array $replace
 * @param string|null $locale
 * @return array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\Translation\Translator|string|null
 */
function lswl_api_lang_messages_trans($key = null, $replace = [], $locale = null)
{
    return trans(sprintf('lswl-api-lang::messages.%s', $key), $replace, $locale);
}
