<? include "../config/core.php";



	// site setting
	$menu_name = 'api';
	$site_set['footer'] = false;
	// $css = [''];
	// $js = [''];
?>
<? include "block/header.php"; ?>

	<div class="sss">

        <script>
            $.ajax({
                url: "https://api.jowi.club/",
				type: "POST",
                contentType: "application/json",
                dataType: "json",
				// dataType: "html",
				data: ({
					api_key: 'lZyVIQodijgqOAgSweP9b1iwnxo0Ln4JuLkfx0V1',
					// sig: 'Uuvm3PEp0aq1gtbpig2rwtRQfirrgbNIBO_e9FdzJRMP_5y3r6NdNg',
					// sig: 'ca4d5bc69ecb1b4990b4c196e9b2d7b9d72660618f227646bcb1e6a9cd334b49',
					sig: 'ca4d5bc69e34b49',
				}),
                beforeSend: function(){ },
                error: function(data){ 
                    console.log(data)
                },
				success: function(data){
                    console.log(data)
				},
			})
            
            // $.ajax({
            //     url: "https://api.jowi.club/v3/restaurants/:restaurant_id/courses",
			// 	type: "POST",
            //     contentType: "application/json",
            //     dataType: "json",
			// 	// dataType: "html",
			// 	data: ({
			// 		api_key: 'lZyVIQodijgqOAgSweP9b1iwnxo0Ln4JuLkfx0V1',
			// 		sig: 'Uuvm3PEp0aq1gtbpig2rwtRQfirrgbNIBO_e9FdzJRMP_5y3r6NdNg',
			// 		restaurant_id: 'c895a9ca-c79f-4acc-8bf7-22681532ad6b',
			// 	}),
            //     beforeSend: function(){ },
            //     error: function(data){ 
            //         console.log(data)
            //     },
			// 	success: function(data){
            //         console.log(data)
			// 	},
			// })
        </script>

    </div>

<? include "block/footer.php"; ?>