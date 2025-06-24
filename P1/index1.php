<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>自己表現アンケート</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
  <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h1 class="text-xl font-bold mb-4">自己表現アンケート</h1>
    <form action="result.php" method="POST" class="space-y-4">
      <div>
        <label class="block font-semibold">あなたの年代を教えてください</label>
        <select name="age_group" class="border p-2 w-full" required>
          <option value="">選択してください</option>
          <option value="10代">10代</option>
          <option value="20代">20代</option>
          <option value="30代">30代</option>
          <option value="40代〜">40代〜</option>
        </select>
      </div>

      <div>
        <label class="block font-semibold">自分をうまく表現できていると思いますか？</label>
        <label><input type="radio" name="can_express" value="はい" required> はい</label>
        <label class="ml-4"><input type="radio" name="can_express" value="いいえ"> いいえ</label>
      </div>

      
      <div>
        <label class="block font-semibold">そう思う理由を教えてください</label>
        <textarea name="reason" rows="3" class="w-full border p-2" required></textarea>
      </div>

      <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-800">送信</button>
    </form>
  </div>
</body>

</html>
