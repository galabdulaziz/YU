using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class GameManager : MonoBehaviour
{
public int score = 0;
public Text scoreText;

private void Awake()
{
DontDestroyOnLoad(this.gameObject);

}
    // Start is called before the first frame update
    void Start()
{
if(scoreText == null)
{
scoreText = GameObject.Find("Score").GetComponent<Text>();
}
 
 }
    
    public void UpdateScore(int value)
{
score += value;
scoreText.text = score.ToString();
}
public void SetScoreText(Text aScoreText)
{
scoreText = aScoreText;
scoreText.text = score.ToString();
}
}
