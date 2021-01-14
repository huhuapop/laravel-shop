<?php

return [
    'alipay' => [
        'app_id'         => '2021000116699375',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgtWFrAvNmP5ozk0zgVyeWzQe5GVwu88XUIVMwvPguVeJ8iAW14KEsInPj6sdxJf9/dkvKcawhs92hRbGqLQYU55naNfIvgHiaLc1uQfJcp0mLont4x+DlSUrtCkQhx2Ns2LKzYIbWXZCqWGCWSPJQXr/7kHorqG8Xz/SrajtclHRqgk70iMxh71WPLVcn+8egRLgW6h4AV607X0WK6ZGvjhNdSm8w7M2vV7bCXmUQUAutPlqqwSZdF0kFHHrcQ739RoxV7R6togulwXRi0N0/jgCvh/ncMlhcTRUSQ4xFnfnqqW1as3pR4+/59g72J5RPIrtgVSPxz+yPi8If83PNwIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAjQhvhtmC7Sc3iJcoj1Kz5Bp6xpu4+AFq9aY37spW4oNIDz0lhuJO9sWp/Mouu3ydE1oDfwwKq6NX8pyVCPmcP0R6xvkzaG8zTqxQV8povbgIiwo6kIpmKUqQLq7VKPExysOFhmlxj39TFdtq++eeYkHJD49xhKpM3JS/kNxAaj396/YyBgsGhLliOUImoSWk1BPtQcjb66ugeFbPbTZ9pzj5JqQJXIdhP1Cc2wKPNUU/9PptpAfH62AkTqU9xIQFghvWMu+lxYVAp5TluHrNvTScKgOG/HJ0lZFE/CFO3rTE25LyMucb2QmAbKj4KfnlFsMkHzL1pycakWIfnJrzmQIDAQABAoIBADBJrh3mxXw7jDkZQErqTyuPoW/1C3zmx196XPZGkz8VIgwNrJalT9IQVaZ29088WG+yxzWtws2HrOolkKW1CTlkUgFke6SLRm7ucsfMRtaGd25bvzeUG2yR2hIRzGwrQRgin8ooujgeqSz3poa/hCwySAwq2fxJbu2rhHet4eQ99kZG6Oxge176jCZaYlEZUmsYaQa1BCeR4ud6D2W6NAA5a4yJXD24L6SsMNyrxuttUJ7l8lPblVdCdftdEX7G/wiVpIXWTwQNvwnlpqBOkKHgQT6/RW0Hb+wQ1W9cHhU7PIlIIi1xltskLfGhQ8Xd5jLvdHn0Rb5TGRtDnoym+u0CgYEA7EOXeCibJaTve9lfWEzCmkCaQpxx2wljh5n1qWj0gbIxQN0vwd6hTa+FDEHVYJ90no5V0yZfm0zG3mhVEH9pOwX4ss/4/+ISsMU7AUFTr6sPk+3eBiRwNbBPwW5923XLLygnZPBqGshHJKi6Pg1SNdjeRejlkE8zQ7wuJI+z8X8CgYEAmNBd6epKPnRdfi4Rx4ZIAhg6m/kRYLADr2QZ8rymXHJ2zx3CiLy+k0inAVc8/8XgjnXGnyXYWdtaM/StGjUvE+qIF7it0/D4M92Y5ZKTwHrvV2ZjFeUnNeB9Z2T1yzf6ErBSGupBid7PvWonr6MiGWbVGLMsaq/74J4LifbU9ucCgYB2yjlDIe93yujaNV3Z8KY7llW5Ph2EysCvMjqxFeMxvp1DBrL3X+9sNt7HXeZh8WpaOihuxLF3TPAEbSKv68/F7GexyB1i0pEhLdlP9T+VaIWplAR4xCNi6yX+lIZVLHGfYSoFd1dx5dbXWLpjbqEyD7saHVIm75tP6DKvEU2hEwKBgB6x2+tccEVTQmRSBKg7RMOG8l7aDK+LK3JTfRLQ6emv5EV+CNFGeFFFSqZuS4ZkzNJQvfDBvU9vTBMblpmpDSfG+EcrhV8JDBH+9PNIGf2Ts/euTUDcop+j1AysruJ+//A5EoTtgPScmMXHSOlyryrDCRLJCqbzaniXxmGT/vsJAoGBAIKcXySeK75sflxZUtKZoexRISHoij0fWHepJDqv7nJsf/9oKkf+3rZSUlrMrO3YFQyiXs/PCPOTdhC9nQr2CdZzYjF4CgyGG4Cl/15EGm9leGSDDXAHevGqQIbndeUrQROY9WTgTKyKxkNIhcBbXyVDMSWti2MJTWKY/lGFnLiC',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
