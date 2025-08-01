<?php
function FlexMessageLINEoa($objectcheck)
{
    $checkcaseis = $objectcheck->casemsg;
    if (trim($checkcaseis) === "01" || trim($checkcaseis) === "02") {
        return [
            'type' => "bubble",
            'body' => [
                'type' => "box",
                'layout' => "vertical",
                'contents' => [
                    [
                        'type' => "text",
                        'text' => "งานประเมินนักศึกษาแทพย์",
                        'weight' => "bold",
                        'color' => "#b55abe",
                        'size' => "sm",
                    ],
                    [
                        'type' => "text",
                        'text' => $objectcheck->topic,
                        'weight' => "bold",
                        'size' => "xxl",
                        'margin' => "md",
                        'wrap' => true,
                    ],
                    [
                        'type' => "text",
                        'text' => "ได้รับงานประเมินบนระบบ eyeEstimate ",
                        'size' => "xs",
                        'color' => "#aaaaaa",
                        'wrap' => true,
                    ],
                    [
                        'type' => "separator",
                        'margin' => "xxl",
                    ],
                    [
                        'type' => "box",
                        'layout' => "vertical",
                        'margin' => "xxl",
                        'spacing' => "sm",
                        'contents' => [
                            [
                                'type' => "box",
                                'layout' => "horizontal",
                                'contents' => [
                                    [
                                        'type' => "text",
                                        'text' => "นศพ :" . $objectcheck->studentname,
                                        'size' => "sm",
                                        'color' => "#555555",
                                        'flex' => 0,
                                        'wrap' => true,
                                    ],
                                ],
                            ],
                            [
                                'type' => "box",
                                'layout' => "horizontal",
                                'contents' => [
                                    [
                                        'type' => "text",
                                        'text' => "ส่งงานวันที่ :" . $objectcheck->date,
                                        'size' => "sm",
                                        'color' => "#555555",
                                        'flex' => 0,
                                        'wrap' => true,
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'type' => "separator",
                        'margin' => "xxl",
                    ],
                    [
                        'type' => "box",
                        'layout' => "vertical",
                        'contents' => [
                            [
                                'type' => "box",
                                'layout' => "horizontal",
                                'contents' => [
                                    [
                                        'type' => "button",
                                        'action' => [
                                            'type' => "uri",
                                            'label' => "ประเมิน",
                                            'uri' => $objectcheck->linkis,
                                        ],
                                        'color' => "#b55abe",
                                        'style' => "primary",
                                    ],
                                ],
                            ],
                        ],
                        'margin' => "md",
                    ],
                ],
            ],
            'styles' => [
                'footer' => [
                    'separator' => true,
                ],
            ],
        ];
    } else if (trim($checkcaseis) === "05" || trim($checkcaseis) === "06") {
        return [
            'type' => "bubble",
            'body' => [
                'type' => "box",
                'layout' => "vertical",
                'contents' => [
                    [
                        'type' => "text",
                        'text' => "งานประเมินนักศึกษาแทพย์",
                        'weight' => "bold",
                        'color' => "#4c71b3",
                        'size' => "sm",
                    ],
                    [
                        'type' => "text",
                        'text' => $objectcheck->topic,
                        'weight' => "bold",
                        'size' => "xxl",
                        'margin' => "md",
                        'wrap' => true,
                    ],
                    [
                        'type' => "text",
                        'text' => "ได้รับงานประเมินบนระบบ eyeEstimate ",
                        'size' => "xs",
                        'color' => "#aaaaaa",
                        'wrap' => true,
                    ],
                    [
                        'type' => "separator",
                        'margin' => "xxl",
                    ],
                    [
                        'type' => "box",
                        'layout' => "vertical",
                        'margin' => "xxl",
                        'spacing' => "sm",
                        'contents' => [
                            [
                                'type' => "box",
                                'layout' => "horizontal",
                                'contents' => [
                                    [
                                        'type' => "text",
                                        'text' => "หัวเรื่อง :" . $objectcheck->casetopic,
                                        'size' => "sm",
                                        'color' => "#555555",
                                        'flex' => 0,
                                        'wrap' => true,
                                    ],
                                ],
                            ],
                            [
                                'type' => "box",
                                'layout' => "horizontal",
                                'contents' => [
                                    [
                                        'type' => "text",
                                        'text' => "กลุ่ม :" . $objectcheck->group,
                                        'size' => "sm",
                                        'color' => "#555555",
                                        'flex' => 0,
                                        'wrap' => true,
                                    ],
                                ],
                            ],
                            [
                                'type' => "box",
                                'layout' => "horizontal",
                                'contents' => [
                                    [
                                        'type' => "text",
                                        'text' => "วันที่ :" . $objectcheck->date,
                                        'size' => "sm",
                                        'color' => "#555555",
                                        'flex' => 0,
                                        'wrap' => true,
                                    ],
                                ],
                            ],
                            [
                                'type' => "box",
                                'layout' => "horizontal",
                                'contents' => [
                                    [
                                        'type' => "text",
                                        'text' => "เวลา :" . $objectcheck->timeis,
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'type' => "separator",
                        'margin' => "xxl",
                    ],
                    [
                        'type' => "box",
                        'layout' => "vertical",
                        'contents' => [
                            [
                                'type' => "box",
                                'layout' => "horizontal",
                                'contents' => [
                                    [
                                        'type' => "button",
                                        'action' => [
                                            'type' => "uri",
                                            'label' => "ประเมิน",
                                            'uri' => $objectcheck->linkis,
                                        ],
                                        'color' => "#4c71b3",
                                        'style' => "primary",
                                    ],
                                ],
                            ],
                        ],
                        'margin' => "md",
                    ],
                ],
            ],
            'styles' => [
                'footer' => [
                    'separator' => true,
                ],
            ],
        ];
    } else {
        return [
            'type' => "bubble",
            'body' => [
                'type' => "box",
                'layout' => "vertical",
                'contents' => [
                    [
                        'type' => "text",
                        'text' => "งานประเมินนักศึกษาแทพย์",
                        'weight' => "bold",
                        'color' => "#e57515",
                        'size' => "sm",
                    ],
                    [
                        'type' => "text",
                        'text' => $objectcheck->topic,
                        'weight' => "bold",
                        'size' => "xxl",
                        'margin' => "md",
                        'wrap' => true,
                    ],
                    [
                        'type' => "text",
                        'text' => "ได้รับงานประเมินบนระบบ eyeEstimate ",
                        'size' => "xs",
                        'color' => "#aaaaaa",
                        'wrap' => true,
                    ],
                    [
                        'type' => "separator",
                        'margin' => "xxl",
                    ],
                    [
                        'type' => "box",
                        'layout' => "vertical",
                        'margin' => "xxl",
                        'spacing' => "sm",
                        'contents' => [
                            [
                                'type' => "box",
                                'layout' => "horizontal",
                                'contents' => [
                                    [
                                        'type' => "text",
                                        'text' => "กลุ่ม : " . $objectcheck->group,
                                        'size' => "sm",
                                        'color' => "#555555",
                                        'flex' => 0,
                                        'wrap' => true,
                                    ],
                                ],
                            ],
                            [
                                'type' => "box",
                                'layout' => "horizontal",
                                'contents' => [
                                    [
                                        'type' => "text",
                                        'text' => "วันที่ : " . $objectcheck->date,
                                        'size' => "sm",
                                        'color' => "#555555",
                                        'flex' => 0,
                                        'wrap' => true,
                                    ],
                                ],
                            ],
                            [
                                'type' => "box",
                                'layout' => "horizontal",
                                'contents' => [
                                    [
                                        'type' => "text",
                                        'text' => "เวลา : " . $objectcheck->timeis,
                                    ],
                                ],
                            ],
                        ],
                    ],
                    [
                        'type' => "separator",
                        'margin' => "xxl",
                    ],
                    [
                        'type' => "box",
                        'layout' => "vertical",
                        'contents' => [
                            [
                                'type' => "box",
                                'layout' => "horizontal",
                                'contents' => [
                                    [
                                        'type' => "button",
                                        'action' => [
                                            'type' => "uri",
                                            'label' => "ประเมิน",
                                            'uri' => $objectcheck->linkis,
                                        ],
                                        'color' => "#e57515",
                                        'style' => "primary",
                                    ],
                                ],
                            ],
                        ],
                        'margin' => "md",
                    ],
                ],
            ],
            'styles' => [
                'footer' => [
                    'separator' => true,
                ],
            ],
        ];
    }
}

function LineOAmessageNotify($accessTokenLine, $userIdline, $messageObj)
{
    // ข้อมูลการส่งข้อความ
    $accessToken = $accessTokenLine;
    $userId = $userIdline;

    // การตั้งค่า HTTP header
    $headers = [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $accessToken,
    ];

    // ข้อมูล payload สำหรับการส่งข้อความ
    $data = [
        'to' => $userId,
        'messages' => [
            [
                'type' => 'flex',
                'altText' => 'แจ้งเตือน eyeEstimate',
                'contents' => FlexMessageLINEoa($messageObj)
            ],
        ],
    ];

    // การตั้งค่า cURL
    $ch = curl_init('https://api.line.me/v2/bot/message/push');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // ส่งคำขอ
    $response = curl_exec($ch);
    curl_close($ch);

    // ตรวจสอบผลลัพธ์
    if ($response === false) {
        echo 'Curl error: ' . curl_error($ch);
    } else {
        echo 'Response: ' . $response;
    }
}
?>