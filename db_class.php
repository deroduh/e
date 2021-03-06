<?php	
    
    require "Db.php"; 
    
    class DataBase {



        
	public static function getRecordById($id)
    {
        // Зєднання з БД
        $db = Db::getConnection();

        // Текст запиту до БД
        $sql = 'SELECT * FROM main WHERE `WorkOrder_ID` = :id';

        // Використовується підготований запит
        $result = $db->prepare($sql);
         $result->bindParam(':id', $id, PDO::PARAM_INT);
        // Вказання що вихідні дани потрібно оформити в вигляді масиву
        $result->setFetchMode(PDO::FETCH_NUM);

        // Виконання запиту
        $result->execute();

        // Повертання даних

        return $result->fetch();
    }
    public static function getIds(){

        $db = Db::getConnection();

        // Запит до БД
        $result = $db->query('SELECT WorkOrder_ID FROM main ORDER BY WorkOrder_ID ASC ');
        // Отримання і повернення результатів
        $i = 0;
        $idsList = array();
        while ( $row = $result->fetch()) {
            $idsList[$i]['WorkOrder_ID'] = $row['WorkOrder_ID'];
            $i++;
        }
        return $idsList;
    }


     public static function deleteRecordById($id)
    {
        // Зєднання з БД
        $db = Db::getConnection();

        // Текст запиту до БД
        $sql = 'DELETE FROM main WHERE WorkOrder_ID = :id';

        // Отримання і повернення результатів. Використовується підготований запит
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        return $result->execute();
    }

    public static function createRecord($param)
    {
        // Зєднання з БД
        $db = Db::getConnection();

        // Текст запиту до БД
        $sql = 'INSERT INTO main(`Subject`, `WorkOrder_ID`, `WorkOrder_URL`, `Description`, `Internal Description`, `Response/Solution`, `Assigned_to`, `Progress`, `Spec`, `QA`, `Project`, `Registration_Date`, `Estimated_Hours`, `Actual_Hours`, `Module`, `Started_Date`) '
                . 'VALUES ()';

        // Отримання і повернення результатів. Використовується підготований запит
        $result = $db->prepare($sql);
        return $result->execute();
    }

    public static function getAllRecords()
    {
          // Зєднання з БД
        $db = Db::getConnection();

        // Запит до БД
        $result = $db->query('SELECT * FROM main ORDER BY WorkOrder_ID ASC ');
        // Отримання і повернення результатів
        $i = 0;
        $recordsList = array();
        while ( $row = $result->fetch()) {
            $recordsList[$i][0] = $row['Subject'];
            $recordsList[$i][1] = $row['WorkOrder_ID'];
            $recordsList[$i][2] = $row['WorkOrder_URL'];
            $recordsList[$i][3] = $row['Description'];
            $recordsList[$i][4] = $row['Internal Description'];
            $recordsList[$i][5] = $row['Response/Solution'];
            $recordsList[$i][6] = $row['Assigned_to'];
            $recordsList[$i][7] = $row['Progress'];
            $recordsList[$i][8] = $row['Spec'];
            $recordsList[$i][9] = $row['QA'];
            $recordsList[$i][10] = $row['Project'];
            $recordsList[$i][11] = $row['Registration_Date'];
            $recordsList[$i][12] = $row['Estimated_Hours'];
            $recordsList[$i][13] = $row['Actual_Hours'];
            $recordsList[$i][14] = $row['Module'];
            $recordsList[$i][15] = $row['Started_Date'];
            $i++;
          }
        return $recordsList;

/*
    $result = $db->prepare($sql);
         $result->bindParam(':id', $id, PDO::PARAM_INT);
        // Вказання що вихідні дани потрібно оформити в вигляді масиву
        $result->setFetchMode(PDO::FETCH_NUM);
*/

    }
}