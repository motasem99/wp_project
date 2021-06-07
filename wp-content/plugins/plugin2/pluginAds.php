<?php


function wpb_demo_shortcode() { 
    $form = '

    <form method="post" action="<?php echo site_url("/news/"); ?>">
        <div>
            <label>اسم الجهة المعلنة</label>
            <input type="text" name="name" />

            <label>منطقة الاعلان</label>
            <input type="text" name="location" />

            <label>رقم الجوال</label>
            <input type="number" name="phone" />

            <label>تفاصيل</label>
            <input type="number" name="description" />
            </div>

            <button>save</button>

    </form>
    ';
    return $form;
    }
    add_shortcode('ads', 'wpb_demo_shortcode');
?>