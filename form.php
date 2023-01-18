<?php
                
                $lowerEng = 'abcdefghijklmnopqrstuvwxyz';
                $upperEng = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $digitals = '0123456789';
                $specSymb = '~`!@#$%^&*()_-+={[}]|\:;",.?/';
                $all = '';
                if ($_POST['countOfSymbols'] > 0 and $_POST['countOfPasswords'] > 0) {
                    if($_POST['upperEng'] == 'upperEng'){
                        $all .= $upperEng;
                    }
                    if($_POST['lowerEng'] == 'lowerEng'){
                        $all .= $lowerEng;
                    } 
                    if($_POST['digitals'] == 'digitals'){
                        $all .= $digitals;
                    } 
                    if($_POST['specSymb'] == 'specSymb'){
                        $all .= $specSymb;
                    }
                    for($i = 0; $i < $_POST['countOfPasswords']; $i++){
                        $password = '';
                        for($y = 0; $y < $_POST['countOfSymbols']; $y++) {
                            $password .= $all[rand(0, strlen($all))];
                        }
                        $allpass .= $password . '</br>';
                    }
                }
                return $allpass;
                ?>