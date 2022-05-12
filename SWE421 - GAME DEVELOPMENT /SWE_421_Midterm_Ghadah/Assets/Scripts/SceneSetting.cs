using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
public class SceneSetting : MonoBehaviour
{
public GameManager gm;
public Text scoreText;
    // Start is called before the first frame update
    void Start()
    {
     gm = GameObject.Find("GameManager").GetComponent<GameManager>(); 
    scoreText = GameObject.Find("Score").GetComponent<Text>();
    if (gm != null)
    {
    gm.SetScoreText(scoreText);
    }
    
    }

    
}
