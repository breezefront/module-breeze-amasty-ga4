<?php

namespace Swissup\BreezeAmastyGa4\Plugin;

class BreezeDomDocument
{
    public function afterGetHtmlEntities($subject, $result)
    {
        // prevent escaping of =>, &&, & inside `am-ga4` elements.
        return array_merge($result, [
            '<am-ga4 ' => '<script data-bz-am-ga4 ',
            '</am-ga4>' => '/*data-bz-am-ga-4*/</script>',
        ]);
    }
}
