<?php 
class Cms57ed8a20c20e7_2222859793Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['navigation_items'] = [
        ['главная', 'top'], ['об авторе', 'about-doctor'],
        ['отзывы', 'comments'], ['статьи', 'articles'], ['контакты', 'contacts']
    ];

    $this['about_doctor_items'] = [
        ['Основные направления', 'main-directions'], ['Медицинское образование', 'medical-education'],
        ['Участие в конференциях', 'conference-participation'], ['Авторская методика', 'author-technique']
    ];

    $this['comments'] = [
        [
            'image' => '../themes/dr-zaitsev/assets/images/voronina.png',
            'name' => 'Марина Воронина',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat est non sem molestie venenatis.' .
                            'Mauris ac est at neque placerat efficitur laoreet et nulla. Integer Integer Integer Integer Integer Integer Integer Integer' .
                            'Integer Integer Integer Integer Integer Integer Integer Integer Integer Integer Integer Integer Integer Integer Integer Integer'
        ], [
            'image' => '../themes/dr-zaitsev/assets/images/voronina.png',
            'name' => 'Марина Воронина',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat est non sem molestie venenatis.' .
                            'Mauris ac est at neque placerat efficitur laoreet et nulla. Integer'
        ], [
            'image' => '../themes/dr-zaitsev/assets/images/voronina.png',
            'name' => 'Марина Воронина',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat est non sem molestie venenatis.' .
            'Mauris ac est at neque placerat efficitur laoreet et nulla. Integer'
        ], [
            'image' => '../themes/dr-zaitsev/assets/images/voronina.png',
            'name' => 'Марина Воронина',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat est non sem molestie venenatis.' .
            'Mauris ac est at neque placerat efficitur laoreet et nulla. Integer'
        ], [
            'image' => '../themes/dr-zaitsev/assets/images/voronina.png',
            'name' => 'Марина Воронина',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consequat est non sem molestie venenatis.' .
            'Mauris ac est at neque placerat efficitur laoreet et nulla. Integer'
        ]
    ];
}
public function onConsultationRequest() 
{
    $formFieldsValues = post();
    $formFields = array_keys($formFieldsValues);

    $validator = Validator::make($formFieldsValues, [
        "consultName" => "required",
        "consultMail" => "required|email",
        "consultMessage" => "required"
    ], [
        "required" => "Поле обязательно для заполнения",
        "email" => "Неправильный формат электронной почты"
    ]);

    if ($validator->fails()) {
        $messages = $validator->messages();
        $errorMessages = [];

        foreach ($formFields as $field) {
            if ($messages->has($field)) {
                $errorMessages[$field] = $messages->first($field);
            }
        }

        return $errorMessages;
    } else {
        Mail::send('max.requestConsultation', $formFieldsValues, function ($message) {

            $message->to(Config::get('app.zaycev_email'));

        });

        return [];
    }
}
}
