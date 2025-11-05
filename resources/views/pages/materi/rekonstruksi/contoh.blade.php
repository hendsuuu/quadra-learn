<div style="padding: 60px 30px 0 30px;" class="mb-5">
    <span class="border border-primary p-2 rounded">Contoh Soal: </span>
    <p class="mt-3">
        Carilah persamaan fungsi kuadratnya yang grafiknya melalui titik \( 𝐾(1,2), L(2,3) \)dan \( M(3,5) \).
    </p>
    </div>
    <div style="padding: 0 30px;">
    <span class="border border-primary p-2 rounded">Penyelesaian: </span>
    <ul class="mt-3">
        <li>
            Substitusi koordinat \( 𝐾(1,2), L(2,3) \) dan \( M(3,5) \) ke dalam fungsi, didapat
            persamaan berikut: 
            $$ 2 = a(1)^2 + b(1) + c $$
            $$ 3 = a(2)^2 + b(2) + c $$
            $$ 5 = a(3)^2 + b(3) + c $$
        </li>
        <li>
            Kemudian dari tiga persamaan ini didapatkan sistem persamaan linear yaitu: 
        <div class="d-flex flex-row justify-content-center">
            <span style="font-size: 6.5rem" class="me-1">{</span>
            <div class="flex-col fs-5 mt-3">
                <p> \( a + b + c = 2 \) </p>
                <p> <input type="text" placeholder="" style="width: 30px;">\( a \) + <input type="text" placeholder="" style="width: 30px;">\( b \) + \( c \) = <input type="text" placeholder="" style="width: 30px;"> </p>
                <p> <input type="text" placeholder="" style="width: 30px;">\( a \) + <input type="text" placeholder="" style="width: 30px;">\( b \) + \( c \) = <input type="text" placeholder="" style="width: 30px;"> </p>
            </div>
        </div>
        </li>
        <li>
            Kemudian eleminasi salah satu variabel.
            Misal kita eleminasi variabel \(c\) dengan mengurangkan persamaan kedua dengan persamaan pertama maka:
            <p> (<input type="text" placeholder="" style="width: 30px;"> \( a \) + <input type="text" placeholder="" style="width: 30px;"> \( b \) + \( c \)) - \((a + b + c)\) = <input type="text" placeholder="" style="width: 30px;"> - 2 </p>
            <p> <input type="text" placeholder="" style="width: 30px;"> \( a \) + \( b \) = <input type="text" placeholder="" style="width: 30px;"> </p>
            Selanjutnya, kurangi persamaan ketiga dengan persamaan kedua maka:
            <p> (<input type="text" placeholder="" style="width: 30px;"> \( a \) + <input type="text" placeholder="" style="width: 30px;"> \( b \) + \( c \)) - (<input type="text" placeholder="" style="width: 30px;"> \( a \) + <input type="text" placeholder="" style="width: 30px;"> \( b \) + \( c \)) = <input type="text" placeholder="" style="width: 30px;"> - <input type="text" placeholder="" style="width: 30px;"> </p>
            <p> <input type="text" placeholder="" style="width: 30px;"> \( a \) + \( b \) = <input type="text" placeholder="" style="width: 30px;"> </p>
        </li>
        <li>
            Setelah mengeliminasi, maka kita akan mendapatkan persamaan baru yaitu:
        <div class="d-flex flex-row justify-content-center">
            <span style="font-size: 4rem" class="me-1">{</span>
            <div class="flex-col fs-5 mt-1">
                <p> <input type="text" placeholder="" style="width: 30px;"> \( a \) + \( b \) = <input type="text" placeholder="" style="width: 30px;"> → Persamaan 1 </p>
                <p> <input type="text" placeholder="" style="width: 30px;"> \( a \) + \( b \) = <input type="text" placeholder="" style="width: 30px;"> → Persamaan 2 </p>
            </div>
        </div>
            Kemudian, kurangi kedua persamaan tersebut dengan mengurangkan
            persamaan 2 ke persamaan 1, maka hasilnya adalah:
            <p> (<input type="text" placeholder="" style="width: 30px;"> \( a \) + \( b \)) - (<input type="text" placeholder="" style="width: 30px;"> \( a \) + \( b \)) = <input type="text" placeholder="" style="width: 30px;"> - <input type="text" placeholder="" style="width: 30px;"> </p>
            <p> <input type="text" placeholder="" style="width: 30px;"> \( a \) = <input type="text" placeholder="" style="width: 30px;"> </p>
            
            <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap;">
                <span>\( a = \)</span>
                
                <!-- Pecahan 1 -->
                <div style="display: inline-grid; grid-template-rows: auto auto; text-align: center;">
                    <input type="text" id="user_x_num_step1" placeholder="" style="width: 30px;">
                    <hr style="margin: 0;">
                    <input type="text" id="user_x_den_step1" placeholder="" style="width: 30px;">
                </div>
            </div>
        </li>

        <li> Selanjutnya substitusi nilai \(a\) ke salah satu persamaan untuk menemukan \(b\).
            <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap; font-size: 1.1rem;">
                <!-- Bentuk: [input] (pecahan) + b = [input] -->
                <input type="text" style="width: 30px;">
                <span>\( (\)</span>
                <div style="display: grid; grid-template-rows: auto auto; text-align: center;">
                    <input type="text" id="user_x_num_step1" placeholder="" style="width: 30px;">
                    <hr style="margin: 0;">
                    <input type="text" id="user_x_den_step1" placeholder="" style="width: 30px;">
                </div>

                <span>\( ) + b = \)</span>
                <input type="text" style="width: 30px;">
            </div>

            <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap; font-size: 1.1rem;">
                <!-- Bentuk: pecahan + b = [input] -->
                <div style="display: grid; grid-template-rows: auto auto; text-align: center;">
                    <input type="text" id="user_x_num_step1" placeholder="" style="width: 30px;">
                    <hr style="margin: 0;">
                    <input type="text" id="user_x_den_step1" placeholder="" style="width: 30px;">
                </div>

                <span>\( + b = \)</span>
                <input type="text" style="width: 30px;">
            </div>
            
            <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap; font-size: 1.1rem;">
                <!-- Bentuk: b = [input] - pecahan -->
                <span>\( b = \)</span>
                <input type="text" style="width: 30px;">
                <span>\( - \)</span>
                <div style="display: grid; grid-template-rows: auto auto; text-align: center;">
                    <input type="text" id="user_x_num_step1" placeholder="" style="width: 30px;">
                    <hr style="margin: 0;">
                    <input type="text" id="user_x_den_step1" placeholder="" style="width: 30px;">
                </div>
            </div>

            <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap; font-size: 1.1rem;">
                <!-- Bentuk: b = - pecahan -->
                <span>\( b = - \)</span>
                <div style="display: grid; grid-template-rows: auto auto; text-align: center;">
                    <input type="text" id="user_x_num_step1" placeholder="" style="width: 30px;">
                    <hr style="margin: 0;">
                    <input type="text" id="user_x_den_step1" placeholder="" style="width: 30px;">
                </div>
            </div>
        </li>

        <li>
            Kemudian menemukan nilai \(c\) dengan mensubstitusi nilai \(a\) dan \(b\) ke salah
            satu persamaan awal, maka:
            <p> \( a + b + c = 2 \) </p>
            <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap; font-size: 1.1rem; margin-bottom: 10px;">
                <!-- Pecahan 1 -->
                <div style="display: inline-grid; grid-template-rows: auto auto; text-align: center;">
                    <input type="text" id="user_x_num_step1" placeholder="" style="width: 30px;">
                    <hr style="margin: 0;">
                    <input type="text" id="user_x_den_step1" placeholder="" style="width: 30px;">
                </div>
                <span>-</span>
                <!-- Pecahan 2 -->
                <div style="display: inline-grid; grid-template-rows: auto auto; text-align: center;">
                    <input type="text" id="user_x_num_step1" placeholder="" style="width: 30px;">
                    <hr style="margin: 0;">
                    <input type="text" id="user_x_den_step1" placeholder="" style="width: 30px;">
                </div>
                <span>+ \( c \)</span>
            </div>
            <span> \( c \) = <input type="text" placeholder="" style="width: 30px;"> </span>
        </li>
        <li>
            Setelah menemukan nilai \(a, b\) dan \(c\), maka di dapat fungsi kuadrat yaitu:
            <div style="display: flex; align-items: center; gap: 12px; flex-wrap: wrap; font-size: 1.1rem;">
                <!-- Bentuk: y = - pecahan -->
                <span>\( y = \)</span>
                <!-- pecahan 1 -->
                <div style="display: grid; grid-template-rows: auto auto; text-align: center;">
                    <input type="text" id="user_x_num_step1" placeholder="" style="width: 30px;">
                    <hr style="margin: 0;">
                    <input type="text" id="user_x_den_step1" placeholder="" style="width: 30px;">
                </div>
                <p>\( x^2 - \)</p>

                <!-- pecahan 2 -->
                <div style="display: grid; grid-template-rows: auto auto; text-align: center;">
                    <input type="text" id="user_x_num_step1" placeholder="" style="width: 30px;">
                    <hr style="margin: 0;">
                    <input type="text" id="user_x_den_step1" placeholder="" style="width: 30px;">
                </div>
                <p>\( x + \)<input type="text" placeholder="" style="width: 30px;"></p>
            </div>
        </li>
    </ul>
</div>
