<?php

namespace Swissup\BreezeAmastyGa4\Plugin;

class BreezeDomDocument
{
    public function afterGetHtmlEntities($subject, $result)
    {
        // prevent escaping of =>, &&, & inside `am-ga4` elements.
        return array_merge($result, [
            '<am-ga4' => '<script',
            '</am-ga4>' => '</script>',
        ]);
    }
}
