<?php
/**
 * This User will have functions that hadles user registeration,
 * login and forget password functionality
 * @author vetripandi
 * @copyright www.vetbossel.in
 */
class Cl_User
{
	/**
	 * @var will going contain database connection
	 */
	
	
	public function getQuestions(array $data)
	{
		if( !empty( $data ) ){
				
			mysqli_query( $this->_con, $query);
			$results = array();
			$number_question = $_POST['num_questions'];
			$row = mysqli_query( $this->_con, "select * from mcq ORDER BY RAND()");
			$rowcount = mysqli_num_rows( $row );
			$remainder = $rowcount/$number_question;
			$results[2] = $number_question;
			$results['remainder'] = $remainder;
			$results[5] = $rowcount;
			while ( $result = mysqli_fetch_assoc($row) ) {
				$results['qid'][] = $result;
			}
			mysqli_close($this->_con);
			return $results;
		} else{
			throw new Exception( FIELDS_MISSING );
		}
	}
	
	
}