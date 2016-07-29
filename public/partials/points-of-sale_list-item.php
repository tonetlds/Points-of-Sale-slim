<li class="pos_list-item">
	<table>
		<tbody>
			<tr>
				<td align="left">
					<h4 class="title-rep">
						<?php echo $point_of_sale->post_title ?>
					</h4>					
					<address class="pos_address">	
						Representante: <?php echo $point_of_sale->_pos_street ?><br> 				
					</address>		
					<small class="pos_contacts">
						<?php if( !empty($point_of_sale->_pos_number) ){ ?>						
							<?php echo $point_of_sale->_pos_number ?>					
						<?php } ?>
						<?php if( !empty($point_of_sale->_pos_phone) ){ ?>						
							<?php echo "/ {$point_of_sale->_pos_phone}" ?><br>							
						<?php } ?>
					</small>	
					<?php if( !empty($point_of_sale->_pos_email) ){ ?>						
						<small class="pos_contacts">
							<?php if( !empty($point_of_sale->_pos_email) ) ?>
								<a class="email-representante" href='mailto:<?php echo $point_of_sale->_pos_email ?>'><?php echo $point_of_sale->_pos_email ?></a> 
						</small>							
					<?php } ?>
				</td>
			</tr>
		</tbody>
	</table>	
</li>