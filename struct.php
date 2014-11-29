<?php
$conf = (object) Array(
                      'teachers' => (object) Array(),
                      'grades' => (object) Array(
                                                'g8' => (object) Array(
                                                                    'A' => (object) Array(
                                                                                            'Englisch'
                                                                                         ),
                                                                    'B' => NULL,
                                                                    )
                                                  )
                     );

$conf->grades->g8->B = & $conf->grades->g8->A;
print_r($conf);
