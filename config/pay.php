<?php

return [
    'alipay' => [
        'app_id'         => '2016092900626499',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAmtDOmZsMthQZQuFiPu8ImM2631rbdh04Vqy2pFin10MOOEC3cK24WbAHxIXAlSNj+TKLFq8w2oS3aaqem8YyNfs/BsONsW/ZQm4fokGnLYvVvu/BFkpiZZYEg4hG1tGbHqh/5Cj2chV+aN8hrqs4axzqBvEyiahv3+/rEd3nc/l7GgvEtORJoqGBfN0K9uweokqSMJ5ONf1dEMKfQpZlXZnUkaLC29+nW3JbFiGqLERW9iEil5oiXjY+gSUVEphtCFM3xhGareIm/sU47TftVfAzx6Uqbia5S4Wat+tpw9jhMPbfYJBOiUv0CM4q6cEq/9SHBjzE462Yh4osvJXlYQIDAQAB',
        'private_key'    => 'MIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQCTJS7WkMkX+esr4Z4VGCE2vyjbjO/32FULGuqYd1IcbCzSyLY9CelLj68fZh42M9yK4AkKWkGDsDfIMbdjtkKb7BA5R5CjWzLWBUDABQ5ljD2g5aTOeh5NUXZR4Iy8CUz8lNCetsyW7Vg78vA68h4uRysJS4dkAdO34YfcYWFxIGDzUIKpmmha+uNte8v3qye2hnmdFntMUsK6yrhm3IPh5APtWmVPo9x5J2Eyxr6vKQP8I1vOZrHFZsy9QLJ5dBWf1uhQNAxN67zf3Ai8pC7N5/yLf7L0CuLa3jiYXZaDUXEHpdPYzjRME6gyqsPmX4mNUeu+MM/lgmqKpSiPw/x3AgMBAAECggEBAIjFtizBNfpwVnVaaOtom27c7uhsr51r21jQMyF3P76lmmBvKl3AObb/nqML86ckO6pmpmCWFnGGucL+21z2zCFMoqPrbnk5Sx5+kXoq+P/RBHPrIW6/Oi1aPCXNGGOsLYBV/ziX58GeajaHEV9pMD6J7mncZ8PAowA3xWZGqiFQs3exrnf1GpsupQiOH8fb2myQuUlYwRZg5dBNENEcjUqk3y93cSF0XR7QBRA3Z/r18kIq+F3c6u+V+K8NKgb/xac1am5FM1YfXzlMNvX5pFYFfnaRUjXMeFpVL6Smzn4Bg4FiGwGBR3w3+Ynb9Z8kdPJpQN5U6pmbckBsREWFCZECgYEAx7RtYiIjstGw6uot6/pfSdW8TYAKuIpMggZUciJSCqXM5nLb7z6c+vK80aY0oj59f177cmFZh+JObtm4hww2SvShP4WNiCYkwIwBvsaEosOorAqai0vtd1K0aVm4ek49nGJjc3kzNXrvOTDbn+jxhtugh7KMJv+Tkfwa1wyeWBkCgYEAvJ/UFfp09E+lsTng5mxm6IEZfWJW/J/8FyeSUAq3zsuqe5le8dDxGfvtsKJIZB2JoxTCtNiD12MLBMe5mkPvuob9DdLic/y7oRPBV5bRWdbPZ9ocEJ5Q8PobIn3Tpbuipf2RGEyPDVWUjB0l6z+JuJWrk+EfsvX4JG6xKa/Jyw8CgYAXZX4DJzjDdGmju/fRU63iOpYrBjs7T4iTGya9kGPIN5B/1ykJKG6/v7x7W1uDPor5ZylSRzF0CAFkX0GNINMjiPFzPbRNJRrdLAnwTdWwM/gI390nQKf7eMcGKKrCOXRiY+x+1M45D8QDEURJwcK6J/TwsOxWjU6+paiHVUUf0QKBgQCYah2Z1NOERoeAeWA9UQKmhQrvwfLAFxZAL32Op9p2gyOy0+9gPpFTibo6rCcKnsOEv1XFg96kwCc7KZfUC2k+s6zu6qSJTILgWXI1MGzhxy24oQlkdEi7L52VdU778G4w6n+/vr0o7SonPbZSLPk/6dDGoXZXyWFFLxyArsbECQKBgQCrzS/0NPBWdlJIoVHJjsV/6lo7o5PonmYeiL/G2dk9x7L/bBHK/6x9v9TpVBfLe60wlYQs9PeZ8YUFRcbtor8IOUOmM4VySMbOgTJ9OJeWx373d7HEZoR1kXzDTfjMaNZhxE1bGCpq9MP5g+c84ylleGNjCXMENm7kbFAkSf6d/Q==',
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
