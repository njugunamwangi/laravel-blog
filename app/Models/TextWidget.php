    public static function getTitle(string $key) : string {
        $widget = Cache::get('text-widget-'.$key, function() use($key) {
            return TextWidget::query()
                        ->where('key', '=', $key)
                        ->where('active', '=', 1)
                        ->first();
        });

        if($widget) {
            return $widget->title;
        }

        return '';
    }
